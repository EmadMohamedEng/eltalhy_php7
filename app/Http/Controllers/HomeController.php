<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Setting;
use App\Slider;
use App\About;
use App\Book;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings_ = Setting::all();
        $settings = array();
        $book = Book::first();
        echo  $book->id ; die;
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $photos = Photo::orderBy('id', 'desc')->take(9)->get();
        $sliders = Slider::all();
        $about = About::where('title','short_summery')->first();
        return view('main_view.welcome',compact('photos','settings','sliders','about','book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function JICindex()
    {
        return view('JIC.index');
    }
    public function elFinderlEfinder()
    {
        return view('elFinder.elfinder');
    }
}
