<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Category;
use Validator;
use File;
/**
 * Class ClientController.
 *
 * @author  The scaffold-interface created at 2017-04-02 02:54:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - client';
        // $clients = Client::all();
        $clients = Client::orderBy('order', 'asc')->get();
        return view('client.index',compact('clients','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - client';
        
        $categories = Category::all();
        
        return view('client.create',compact('title','categories'  ));
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
            'website_link' => 'required',
            'facebook_link' => 'required',
            'category_id' => 'required|numeric',
            'picture' => 'required'
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $client = new Client();

        
        $client->name = $request->name;
        
        $client->website_link = $request->website_link;

        
        $client->facebook_link = $request->facebook_link;

        $client->category_id = $request->category_id;

        if ($request->hasFile('picture')) {
            $ext =  $request->file('picture')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                $path = $request->file('picture')->move('uploads/employee/', time().'_'.$request->file('picture')->getClientOriginalName());
                
                $client->picture = $path;
            }else{
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }

        $client->save();

        $request->session()->flash('success', 'Client created successfull');
        return redirect('client');
    }

    
    public function edit($id)
    {
        $client = Client::findOrfail($id);
        $categories = Category::all();
        return view('client.edit',compact('client','categories'));
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'filled',
            'website_link' => 'filled',
            'facebook_link' => 'filled',
            'category_id' => 'filled|numeric',
            'picture' => 'filled'
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $client = Client::findOrfail($id);
        $client->name = $request->name;
        $client->website_link = $request->website_link;
        $client->facebook_link = $request->facebook_link;
        $client->category_id = $request->category_id;
        
        if ($request->hasFile('picture')) {
            $ext =  $request->file('picture')->getClientOriginalExtension();
            if ($client->picture) {
                File::delete($client->picture);
            } 
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                $path = $request->file('picture')->move('uploads/employee/', time().'_'.$request->file('picture')->getClientOriginalName());
                
                $client->picture = $path;
            }else{
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }

        $client->save();

        $request->session()->flash('success', 'Client updated successfull');
        return redirect('client');
    }
    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $Client = Client::findOrFail($item);
            $Client->delete();
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
     	$client = Client::findOrfail($id);
     	$client->delete();
        return back();
    }

    public function update_sequence(Request $request)
    {
        $items = $request->item;
        $i=1;
        foreach ($items as $item) {
            $employee = Client::find($item);
            $employee->order = $i;
            $employee->save();
            $i++;
        }

    }
}
