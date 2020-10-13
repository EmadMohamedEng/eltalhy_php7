<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use Validator;
/**
 * Class SettingController.
 *
 * @author  The scaffold-interface created at 2017-04-02 02:44:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - setting';
        $settings = Setting::all();
        return view('setting.index',compact('settings','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - setting';
        
        return view('setting.create',compact('title'));
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
            'key' => 'required',
            'value' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $setting = new Setting();
        $setting->key = $request->key;
        $setting->value = $request->value;
        $setting->save();        
        $request->session()->flash('success', 'Setting created successfull');

        return redirect('setting');
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit - setting';
        
        $setting = Setting::findOrfail($id);
        return view('setting.edit',compact('title','setting'  ));
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
            'key' => 'required',
            'value' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $setting = Setting::findOrfail($id);
        
        $setting->key = $request->key;
        
        $setting->value = $request->value;
        
        
        $setting->save();
        $request->session()->flash('success', 'updated successfull');

        return redirect('setting');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::findOrfail($id);
        $setting->delete();
        return back();
    }
}
