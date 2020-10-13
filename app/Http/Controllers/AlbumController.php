<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Album;
use Validator;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        $title = 'Index - Album';

        return view('album.index',compact('albums','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $title = 'Create - Album';
        return view('album.create',compact('title'));
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
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:album,name',
            'description' => 'required',
            'image' => 'required|image'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $album = new Album();
        $album->name = $request->name;
        $album->description = $request->description;


        if ($request->hasFile('image')) {
            $ext =  $request->file('image')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                
                $path = $request->file('image')->move('uploads/album/', time().'_'.$request->file('image')->getClientOriginalName());
                
                $album->image = $path;            
            }else{
                
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }

        $album->save();
        $request->session()->flash('success', 'Created Succesfully');
        return redirect('album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::findOrfail($id);   
        $title = 'Show - Album';

        return view('album.show',compact('album','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrfail($id);
        $title = 'Edit - Album';
        
        return view('album.edit',compact('album','title'));
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
         $validator = Validator::make($request->all(),[
            'name' => 'required|unique:album,name,'.$id,
            'description' => 'required',
            'image' => 'filled|image'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $album = Album::findOrfail($id);
        $album->name = $request->name;
        $album->description = $request->description;


        if ($request->hasFile('image')) {
            $ext =  $request->file('image')->getClientOriginalExtension();
        
            if ( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ) {
                
                $path = $request->file('image')->move('uploads/album/', time().'_'.$request->file('image')->getClientOriginalName());
                
                $album->image = $path;            
            }else{
                
                $request->session()->flash('failed', 'file is not an image');
                return back();
                
            }
        }

        $album->save();
        $request->session()->flash('success', 'Created Succesfully');
        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $album = Album::findOrfail($id);
        $album->delete();
        $request->session()->flash('success', 'Deleted Successfuly');
        return redirect('album');
    }
}
