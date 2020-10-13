<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Job;
use Validator;
use File;
/**
 * Class EmployeeController.
 *
 * @author  The scaffold-interface created at 2017-04-02 03:11:29pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - employee';
        $employees = Employee::orderBy('order', 'asc')->get();
        return view('employee.index',compact('employees','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - employee';
        
        $jobs = Job::all();
        
        return view('employee.create',compact('title','jobs'));
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
            'linkedin_link' => 'required',
            'facebook_link' => 'required',
            'job_id' => 'required|numeric',
            'image' => 'required'
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->linkedin_link = $request->linkedin_link;
        $employee->facebook_link = $request->facebook_link;
        $employee->job_id = $request->job_id;

        if ($request->hasFile('image')) {
            $ext =  $request->file('image')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                $path = $request->file('image')->move('uploads/employee/', time().'_'.$request->file('image')->getClientOriginalName());
                
                $employee->image = $path;
            }else{
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }
        
        $employee->save();

        $request->session()->flash('success', 'Employee created successfull');
        return redirect('employee');
    }

    public function edit($id)
    {
        $employee = Employee::findOrfail($id);
        $jobs = Job::all();
        return view('employee.edit',compact('employee','jobs'));
    }
   
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'filled',
            'linkedin_link' => 'filled',
            'facebook_link' => 'filled',
            'job_id' => 'filled|numeric',
            'image' => 'filled'
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $employee = Employee::findOrfail($id);
        $employee->name = $request->name;
        $employee->linkedin_link = $request->linkedin_link;
        $employee->facebook_link = $request->facebook_link;
        $employee->job_id = $request->job_id;

        if ($request->hasFile('image')) {
            $ext =  $request->file('image')->getClientOriginalExtension();
            if ($employee->image) {
                File::delete($employee->image);
            } 
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                $path = $request->file('image')->move('uploads/employee/', time().'_'.$request->file('image')->getClientOriginalName());
                
                $employee->image = $path;
            }else{
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }
        
        $employee->save();

        $request->session()->flash('success', 'Employee updated successfull');
        return redirect('employee');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$employee = Employee::findOrfail($id);
     	$employee->delete();
        return back();
    }

    public function update_sequence(Request $request)
    {
        $items = $request->item;
        // return $items;
        $i=1;
        foreach ($items as $item) {
            $employee = Employee::find($item);
            $employee->order = $i;
            $employee->save();
            $i++;
        }

    }

    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Employee = Employee::findOrFail($item);
            $Employee->delete();
        }
        return $items;
    }
}
