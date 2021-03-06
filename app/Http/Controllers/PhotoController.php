<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Setting;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Validator;

/**
 * Class PhotoController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:08:37am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index($category = "")
    {
        $title = 'Index - photo';
        $categoryFilter = null;
        if ($category == "") {
            $photos = Photo::all()->sortByDesc('id');
        } else {
            $categoryFilter = Category::where('name', $category)->first();
            $photos = $categoryFilter->photos->sortByDesc('id');
        }
        $categories = Category::all();
        return view('photo.index', compact('photos', 'title', 'categories', 'categoryFilter'));
    }

    public function gallary(Request $request)
    {
        $photos = new Photo;

        $category_id = $request->category_id;
        $page_id = $request->page;

        if ($category_id && $category_id != 'undefined') {
            $photos = $photos->where('category_id', $category_id);
        }
        $photos = $photos->orderBy('id', 'Desc')->paginate(9);

        if ($request->ajax()) {
            return view('photo.photo_pages', compact('photos','page_id'))->render();
        }

        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $categories = Category::all();
        return view('photo.gallary', compact('photos', 'categories', 'settings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - photo';

        $categories = Category::all();

        return view('photo.create', compact('title', 'categories'));
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
            // 'title' => 'required',
            'photo_path' => 'required|image',
            'category_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // return $request->all();
        $photo = new Photo();

        $photo->title = $request->title;

        $photo->photo_path = $request->photo_path;

        $photo->category_id = $request->category_id;

        if ($request->hasFile('photo_path')) {
            $path = $request->file('photo_path')->move('uploads/photo/', time() . '_' . $request->file('photo_path')->getClientOriginalName());
            $photo->photo_path = $path;
        }

        $photo->save();
        $request->session()->flash('success', 'Photo Added Successfuly');
        return redirect('photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $photo = Photo::findOrfail($id);
        if ($photo->photo_path) {
            File::delete($photo->photo_path);
        }
        $photo->delete();
        return back();
    }

    public function gallery_category_id(Request $request)
    {
        $photos = new Photo;

        $category_id = $request->category_id;

        if ($category_id && $category_id != 'undefined') {
            $photos = $photos->where('category_id', $category_id);
        }

        $photos = $photos->orderBy('id', 'Desc')->paginate(9);

        return view('photo.photo_categorys', compact('photos', 'category_id'))->render();
    }
}
