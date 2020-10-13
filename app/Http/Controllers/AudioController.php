<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Audio;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;
use App\Category;
use App\Album;
use App\Setting;
/**
 * Class AudioController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:22:35am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - audio';
        $audios = Audio::all();
        return view('audio.index',compact('audios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - audio';
        $albums = Album::all();
        return view('audio.create',compact('title','albums'));
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
            'title' => 'required|unique:audio',
            'soundcloud_link' => 'required',
            'album_id' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $audio = new Audio();


        $audio->title = $request->title;


        $audio->sound_link = $request->soundcloud_link;

        $audio->album_id = $request->album_id;


        $audio->description = $request->description;


        $audio->slug = str_slug($request->title);

        $audio->save();

        $request->session()->flash('success', 'created successfully');

        return redirect('audio');
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
        $title = 'Show - audio';
        $audio = Audio::findOrfail($id);
        // return $audio;
        return view('audio.show',compact('title','audio'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - audio';

        $audio = Audio::findOrfail($id);
        $albums = Album::all();

        return view('audio.edit',compact('title','audio','albums'));
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
            'title' => 'required|unique:audio,id,'.$id,
            'soundcloud_link' => 'required',
            'album_id' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $audio = Audio::findOrfail($id);

        $audio->title = $request->title;

        $audio->sound_link = $request->soundcloud_link;

        $audio->album_id = $request->album_id;

        $audio->description = $request->description;

        $audio->slug = str_slug($request->title);

        $audio->save();

        return redirect('audio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$audio = Audio::findOrfail($id);
     	$audio->delete();
        return back();
    }

    public function audios()
    {

        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $albums = Album::all();
        return view('audio.all_sounds',compact('settings','albums'));
    }

    public function audios_by_album($id)
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $album = Album::findOrfail($id);
        $audios = $album->audios()->paginate(6);
        return view('audio.sounds',compact('audios','settings'));
    }

    public function show_by_slug($slug)
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $audio = Audio::where('slug',$slug)->first();
        return view('audio.sound_single',compact('audio','settings'));
    }
}
