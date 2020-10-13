<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Career;
use App\Job;
use App\Slider;
use App\Setting;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;
/**
 * Class CareerController.
 *
 * @author  The scaffold-interface created at 2017-04-02 03:23:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - career';
        $careers = Career::all();
        return view('career.index',compact('careers','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - career';
        $jobs  = Job::all();
        $sliders = Slider::all();
        $settings = Setting::all();
        $settings_ = array();
        foreach ($settings as $setting) {
            $settings_[$setting->key] = $setting->value;
        }
        session(['home' => false]);
        return view('career.create',compact('jobs','settings_'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'summery' => 'required',
            'resume' => 'required',
            'position' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $career = new Career();
        $career->first_name = $request->first_name;
        $career->last_name = $request->last_name;
        $career->email = $request->email;
        $career->phone_number = $request->phone_number;
        $career->summery = $request->summery;
        $career->portfolio_url = $request->portfolio_url;
        $career->job_id = $request->position;

        if ($request->hasFile('resume')) {
            $ext =  $request->file('resume')->getClientOriginalExtension();
            if ( $ext == 'pdf' ) {
                $path = $request->file('resume')->move('uploads/career/', time().'_'.$request->file('resume')->getClientOriginalName());
                $career->resume = $path;
            }else{
                $request->session()->flash('failed', 'file is not an pdf');
                return back();
            }
        }

        $career->save();
        $request->session()->flash('success', 'You submitted your resume successfully');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Show - career';

        $career = Career::findOrfail($id);
        return view('career.show',compact('title','career'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - career';
        if($request->ajax())
        {
            return URL::to('career/'. $id . '/edit');
        }

        
        $career = Career::findOrfail($id);
        return view('career.edit',compact('title','career'  ));
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
        $career = Career::findOrfail($id);
    	
        $career->first_name = $request->first_name;
        
        $career->last_name = $request->last_name;
        
        $career->email = $request->email;
        
        $career->phone_number = $request->phone_number;
        
        $career->summery = $request->summery;
        
        $career->portfolio_url = $request->portfolio_url;
        
        $career->resume = $request->resume;
        
        
        $career->save();

        return redirect('career');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/career/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }
    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Career = Career::findOrFail($item);
            $Career->delete();
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
     	$career = Career::findOrfail($id);
     	$career->delete();
        return back();
    }

    public function getResume($id)
    {
        $career = Career::findOrfail($id);
        $path = $career->resume;
        return  response()->download($path);
    }
}
