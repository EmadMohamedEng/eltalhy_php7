<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;
/**
 * Class JobController.
 *
 * @author  The scaffold-interface created at 2017-04-02 03:10:02pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - job';
        $jobs = Job::all();
        return view('job.index',compact('jobs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - job';
        
        return view('job.create');
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
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $job = new Job();

        
        $job->name = $request->name;

        
        $job->description = $request->description;

        
        
        $job->save();

        $request->session()->flash('success', 'Job created successfull');
       

        return redirect('job');
    }

    public function edit($id)
    {
        $job = Job::findOrfail($id);
        return view('job.edit',compact('job'));
    }

    public function update(Request $request,$id)
    {
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $job = Job::findOrfail($id);
        $job->name = $request->name;
        $job->description = $request->description;
        $job->save();
        $request->session()->flash('success', 'Job updated successfull');
    
        return redirect('job');
    }
    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Job = Job::findOrFail($item);
            $Job->delete();
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
     	$job = Job::findOrfail($id);
     	$job->delete();
        return back();
    }
}
