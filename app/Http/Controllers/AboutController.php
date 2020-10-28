<?php

namespace App\Http\Controllers;

use File;

use App\About;
use Validator;
use App\Mentor;
use App\Setting;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - About';
        $abouts = About::all();
        return view('about.index',compact('abouts','title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $title = 'Create - about';

        return view('about.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'title' => 'required|unique:abouts',
                'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $about = new About();


        $about->title = $request->title;


        $about->description = $request->description;

        if ($request->hasFile('photo_path')) {
            $ext =  $request->file('photo_path')->getClientOriginalExtension();

            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {

                $path = $request->file('photo_path')->move('uploads/about/', time().'_'.$request->file('photo_path')->getClientOriginalName());

                $about->photo_path = $path;
            }else{

                $request->session()->flash('failed', 'file is not an image');
                return back();

            }
        }

        $about->save();

        $request->session()->flash('success', 'created successfuly');
        return redirect('about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - about';

        $about = About::findOrfail($id);
        return view('about.show',compact('title','about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - about';

        $about = About::findOrfail($id);
        return view('about.edit',compact('title','about'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
         $validator = Validator::make($request->all(),[
            'title' => 'required|unique:abouts,id,'.$id,
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $about = About::findOrfail($id);

        $about->title = $request->title;

        $about->description = $request->description;

        if ($request->hasFile('photo_path')) {
            $ext =  $request->file('photo_path')->getClientOriginalExtension();

            $validator = Validator::make($request->all(),[
                'photo_path' => 'image'
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            if ($about->photo_path) {
                File::delete($about->photo_path);
            }
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {

                $path = $request->file('photo_path')->move('uploads/about/', time().'_'.$request->file('photo_path')->getClientOriginalName());

                $about->photo_path = $path;
            }else{

                $request->session()->flash('failed', 'file is not an image');
                return back();

            }
        }



        $about->save();
        $request->session()->flash('success', 'updated successfully');

        return redirect('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrfail($id);
        if ($about->photo_path) {
            File::delete($about->photo_path);
        }
        $about->delete();
        return back();
    }

    public function about()
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $about = About::whereNotIn('title',['summery', 'short_summery'])->get();
        $mentors = Mentor::all();
        return view('about.about',compact('about','settings', 'mentors'));
    }
}
