<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;
use File;

/**
 * Class SliderController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:25:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - slider';
        $sliders = Slider::all();
        return view('slider.index',compact('sliders','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - slider';
        
        return view('slider.create',compact('title'));
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
                'title' => 'required',
                'description' => 'required',
                'link' => 'required',
                'photo_path' => 'required|image'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $slider = new Slider();

        
        $slider->title = $request->title;

        
        $slider->description = $request->description;

        
        $slider->link = $request->link;

        if ($request->hasFile('photo_path')) {
            $ext =  $request->file('photo_path')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                
                $path = $request->file('photo_path')->move('uploads/slider/', time().'_'.$request->file('photo_path')->getClientOriginalName());
                
                $slider->photo_path = $path;            
            }else{
                
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }
        
        $slider->save();

        $request->session()->flash('success', 'created successfuly');
        return redirect('slider');
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
        $title = 'Show - slider';

        $slider = Slider::findOrfail($id);
        return view('slider.show',compact('title','slider'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - slider';
        
        $slider = Slider::findOrfail($id);
        return view('slider.edit',compact('title','slider'  ));
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
                'title' => 'required',
                'description' => 'required',
                'link' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $slider = Slider::findOrfail($id);
    	
        $slider->title = $request->title;
        
        $slider->description = $request->description;
        
        $slider->link = $request->link;
        
        if ($request->hasFile('photo_path')) {
            $ext =  $request->file('photo_path')->getClientOriginalExtension();
            
            $validator = Validator::make($request->all(),[
                'photo_path' => 'image'
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            if ($slider->photo_path) {
                File::delete($slider->photo_path);
            }
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                
                $path = $request->file('photo_path')->move('uploads/slider/', time().'_'.$request->file('photo_path')->getClientOriginalName());
                
                $slider->photo_path = $path;            
            }else{
                
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }
        
        
        
        $slider->save();
        $request->session()->flash('success', 'updated successfully');
        
        return redirect('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$slider = Slider::findOrfail($id);
        if ($slider->photo_path) {
            File::delete($slider->photo_path);
        } 
     	$slider->delete();
        return back();
    }
}
