<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Category;
use App\Setting;
use Validator;

/**
 * Class VideoController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:09:56am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - video';
        $videos = Video::all();
        return view('video.index',compact('videos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - video';
        
        $categories = Category::all();
        
        return view('video.create',compact('title','categories' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:videos',
            'youtube_link' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $video = new Video();

        
        $video->title = $request->title;

        
        $video->youtube_link = $request->youtube_link;

        
        $video->description = $request->description;

        
        
        $video->category_id = $request->category_id;


        $video->slug = str_slug($request->title);
        
        $video->save();

        $request->session()->flash('success', 'created successfully');
        return redirect('video');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - video';
        $video = Video::findOrfail($id);
        return view('video.show',compact('title','video'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - video';
   
        $categories = Category::all();

        $video = Video::findOrfail($id);
        
        return view('video.edit',compact('title','video' ,'categories' ) );
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
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:videos,id,'.$id,
            'youtube_link' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // return $request->all();
        $video = Video::findOrfail($id);
    	
        $video->title = $request->title;
        
        $video->youtube_link = $request->youtube_link;
        
        $video->description = $request->description;
        
        
        $video->category_id = $request->category_id;

        $video->slug = str_slug($request->title);
        
        $video->save();
        $request->session()->flash('success', 'updated successfully');
        return redirect('video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$video = Video::findOrfail($id);
     	$video->delete();
        return back();
    }

    public function videos($category)
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $category = Category::where('name',$category)->first();
        $videos = $category->videos()->paginate(6);
        return view('video.videos',compact('videos','settings'));
        // return $category;
    }

    public function show_by_slug($slug)
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $video = Video::where('slug',$slug)->first();

        // get previous user id
        $previous = Video::where('id', '<', $video->id)->max('id');

        // get next user id
        $next = Video::where('id', '>', $video->id)->min('id');
        return view('video.video_single',compact('video','settings','previous','next'));
    }
}
