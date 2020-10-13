<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;
/**
 * Class CategoryController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:06:04am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - category';
        $categories = Category::all();
        return view('category.index',compact('categories','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - category';
        
        return view('category.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:categories,name'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $category = new Category();         
        $category->name = $request->name;
        $category->save();

        $request->session()->flash('success', 'Category created successfull');        

        return redirect('category');
    }
    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - category';
        if($request->ajax())
        {
            return URL::to('category/'. $id . '/edit');
        }

        
        $category = Category::findOrfail($id);
        return view('category.edit',compact('title','category'  ));
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
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:categories,name,'.$id
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $category = Category::findOrfail($id);
    	
        $category->name = $request->name;
        
        
        $category->save();
        $request->session()->flash('success', 'updated successfully');
        
        return redirect('category');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$category = Category::findOrfail($id);
     	$category->delete();
        return back();
    }
}
