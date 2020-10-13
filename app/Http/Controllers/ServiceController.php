<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - service';
        $services = Service::all();
        return view('service.index',compact('services','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - service';
        
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $service = new Service();
        $service->title = $request->title;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->save();
        $request->session()->flash('success', ' created successfull');
        return redirect('service');

    }
    public function edit($id)
    {
        $service = Service::findOrfail($id);
        return view('service.edit',compact('service'));
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $service = Service::findOrfail($id);
        $service->title = $request->title;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->save();
        $request->session()->flash('success', ' updated successfull');
        return redirect('service');
    }
    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Service = Service::findOrFail($item);
            $Service->delete();
        }
        return $items;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrfail($id);
        $service->delete();
        return back();
    }
}
