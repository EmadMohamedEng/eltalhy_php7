<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Setting;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;

/**
 * Class ArticleController.
 *
 * @author  The scaffold-interface created at 2017-04-02 02:47:16pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - article';
        $articles = Article::all();
        return view('article.index',compact('articles','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - article';
        
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'short_summery' => 'required',
            'picture' => 'required',

        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $article = new Article();

        
        $article->title = $request->title;

        
        $article->content = $request->content;

        $article->short_summery = $request->short_summery;
        
        if ($request->hasFile('picture')) {
            $ext =  $request->file('picture')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                $path = $request->file('picture')->move('uploads/article/', time().'_'.$request->file('picture')->getClientOriginalName());
                
                $article->picture_link = $path;
            }else{
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }
        
        $article->save();

        $article->slug = $article->format_uri($article->title).'_'.$article->id;
        $article->save();

        $request->session()->flash('success', ' created successfull');
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($slug,Request $request)
    {
        $title = 'Show - article';

        $article = Article::where('slug',$slug)->first();
        $settings = Setting::all();
        $settings_ = array();
        foreach ($settings as $setting) {
            $settings_[$setting->key] = $setting->value;
        }
        session(['home' => false]);
        return view('article.single',compact('title','article','settings_'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - article';
       
        $article = Article::findOrfail($id);
        return view('article.edit',compact('title','article'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'short_summery' => 'required',
            'content' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $article = Article::findOrfail($id);
    	
        $article->title = $request->title;
        
        $article->content = $request->content;

        $article->short_summery = $request->short_summery;
        
        if ($request->hasFile('picture')) {
            $ext =  $request->file('picture')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {  
                if ($article->picture_link) {
                    File::delete($article->picture_link);
                } 
                $path = $request->file('picture')->move('uploads/article/', time().'_'.$request->file('picture')->getClientOriginalName());
                
                $article->picture_link = $path;
            }else{
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }

        $article->save();

        return redirect('article');
    }
    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Article = Article::findOrFail($item);
            $Article->delete();
        }
        return $items;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$article = Article::findOrfail($id);
     	$article->delete();
        return back();
    }
}
