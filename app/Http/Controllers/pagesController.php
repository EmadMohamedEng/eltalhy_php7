<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Setting;
use App\Article;
use App\Service;
use App\Statistic;
use App\Client;
use App\Category;
use App\Employee;

//use App\Article ;

class pagesController extends Controller
{
    
    public function home() {

        $sliders = Slider::all();
        $articles = Article::all();
        $settings = Setting::all();
        $services = Service::all();
        $statistics = Statistic::all();
        $clients = Client::orderBy('order', 'asc')->get();
        $categories = Category::all();
        $employees = Employee::orderBy('order', 'asc')->get();
        $settings_ = array();
        foreach ($settings as $setting) {
            $settings_[$setting->key] = $setting->value;
        }
        session(['home' => true]);
        return view('welcome',compact('sliders','settings_','articles','services','statistics','clients','categories','employees'));
    }
    
    public function articles() {
        return view('articles.index');
    }
    
    public function single() {
        return view('article.single');
    }
    
    public function career() {
        return view('career');
    }

    public function panel() {
        $sliders = Slider::all();
        $articles = Article::all();
        $settings = Setting::all();
        $services = Service::all();
        $statistics = Statistic::all();
        $clients = Client::all();
        $categories = Category::all();
        $employees = Employee::all();
        return view('panel.index',compact('sliders','settings','articles','services','statistics','clients','categories','employees'));
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
}
