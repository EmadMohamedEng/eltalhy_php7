<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Statistic;
use Validator;
class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - statistic';
        $statistics = Statistic::all();
        return view('statistic.index',compact('statistics','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - statistic';
        
        return view('statistic.create');
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
            'number' => 'required|numeric',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $statistic = new Statistic();
        $statistic->title = $request->title;
        $statistic->icon = $request->icon;
        $statistic->number = $request->number;
        $statistic->save();
        $request->session()->flash('success', ' created successfull');
        return redirect('statistic');

    }

    public function edit($id)
    {
        $statistic = Statistic::findOrfail($id);
        return view('statistic.edit',compact('statistic'));
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'icon' => 'required',
            'number' => 'required|numeric',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $statistic = Statistic::findOrfail($id);
        $statistic->title = $request->title;
        $statistic->icon = $request->icon;
        $statistic->number = $request->number;
        $statistic->save();
        $request->session()->flash('success', ' updated successfull');
        return redirect('statistic');
    }

    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Statistic = Statistic::findOrFail($item);
            $Statistic->delete();
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
        $service = Statistic::findOrfail($id);
        $service->delete();
        return back();
    }
}
