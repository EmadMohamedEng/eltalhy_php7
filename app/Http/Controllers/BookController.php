<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookPhoto;
use App\Http\Controllers\Controller;
use App\Section;
use App\Setting;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Validator;

/**
 * Class BookController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:26:53am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - book';
        $books = Book::all();
        return view('book.index', compact('books', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - book';

        return view('book.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'sections' => 'required',
            'numbers' => 'required',
        ];

        // $nbr = count($request->fileToUpload) - 1;
        // foreach(range(0, $nbr) as $index) {
        //     $rules['fileToUpload.' . $index] = 'image|max:4000';
        // }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // return $request->all();

        //dd($handle);

        $book = new Book();
        $sections = $request->sections;
        $numbers = $request->numbers;
        if (count($numbers) != count($sections)) {
            $request->session()->flash('failed', 'Every section must have a page number');
            return back();
        }

        $book->title = $request->title;
        $book->description = $request->content;

        if ($book->save()) {
            if (!file_exists('uploads/book/' . $book->id . '/')) {
                mkdir('uploads/book/' . $book->id . '/', 0777, true);
            }
        }
        // if ($request->hasFile('fileToUpload')) {
        //     $j = 2;
        //     $end = count($request->file('fileToUpload'));
        //     foreach ($request->file('fileToUpload') as $file) {

        //         $path = $file->move('uploads/book/', time().'_'.$file->getClientOriginalName());

        //         $photo = new BookPhoto();
        //         $photo->photo_path = $path;
        //         $photo->order = $j;

        //         $book->photos()->save($photo);
        //         if ($j == 2) {
        //             $book->start_cover = $photo->id;
        //             $book->save();
        //         }elseif ($j == $end) {
        //             $book->end_cover = $photo->id;
        //             $book->save();
        //         }
        //         $j++;
        //     }
        // }
        $i = 0;
        foreach ($sections as $section_) {
            $section = new Section();
            $section->page_number = $numbers[$i];
            $section->title = $section_;
            $book->sections()->save($section);
            $i++;
        }

        if ($request->hasFile('bookPdf')) {
            $ext = $request->file('bookPdf')->getClientOriginalExtension();
            if ($ext == 'pdf') {
                $path = $request->file('bookPdf')->move('uploads/book/', time() . '_' . $request->file('bookPdf')->getClientOriginalName());
                $book->photo_path = $path;
            } else {
                $request->session()->flash('failed', 'file is not pdf');
                return back();
            }
        }

        $book->save();
        $request->session()->flash('success', 'Please upload book photos on this path  uploads/book/' . $book->id);
        return redirect('file_manager');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = 'Show - book';
        $book = Book::findOrfail($id);
        $photos = $book->photos()->orderBy('order', 'asc')->get();
        return view('book.show', compact('title', 'book', 'photos'));
    }

    public function make_cover($book_id, $photo_id)
    {
        $book = Book::findOrfail($book_id);
        $photo = BookPhoto::findOrfail($photo_id);

        $book->start_cover = $photo->id;
        $book->save();
        return back();
    }

    public function make_index_cover($book_id, $photo_id)
    {
        $book = Book::findOrfail($book_id);
        $photo = BookPhoto::findOrfail($photo_id);

        $book->end_cover = $photo->id;
        $book->save();
        return back();
    }

    public function front_book_view($book_id)
    {
        $book = Book::findOrfail($book_id);
        $photos = $book->photos()->orderBy('order', 'asc')->get();
        $photos_order = BookPhoto::where('book_id',$book_id)->latest('id')->first();
        // dd($photos_order);
        return view('book.book_single', compact('book', 'photos','photos_order'));
    }

    public function books()
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $books = Book::all();

        return view('book.books', compact('books', 'settings'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrfail($id);
        $photos = $book->photos;
        foreach ($photos as $photo) {
            File::delete($photo->photo_path);
            $photo->delete();
        }
        $book->delete();
        return back();
    }

    public function download($id)
    {
        $book = Book::findOrfail($id);
        return response()->download($book->photo_path);
    }

    public function update_sequence($book_id, Request $request)
    {
        $items = $request->item;
        $i = 2;
        foreach ($items as $item) {
            $photo = BookPhoto::find($item);
            $photo->order = $i;
            $photo->save();
            $i++;
        }

    }

    public function loadpage($book_id, $page_order)
    {
        $book = Book::findOrfail($book_id);
        $photo = $book->photos()->where('order', $page_order)->first();
        if ($photo->id != $book->start_cover && $photo->id != $book->end_cover) {
            return array('path' => $photo->photo_path, 'id' => $photo->id, 'order' => $photo->order);
        }
    }

    public function file_build_path(...$segments)
    {
        return join(DIRECTORY_SEPARATOR, $segments);
    }

    public function addimage($id, Request $request)
    {
        $books = array();
        $path = $this->file_build_path("uploads", "book", $id);
        if ($handle = opendir($path)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    $books[] = $file;
                }
            }
            closedir($handle);
        }

        Book::find($id)->photos()->delete();
        foreach ($books as $order_book => $book) {
            $add_book_images = new BookPhoto();
            $add_book_images->photo_path = 'uploads/book/' . $id . '/' . $book;
            $add_book_images->book_id = $id;
            $add_book_images->order = $order_book + 1;
            $add_book_images->save();
        }
        $the_book = Book::find($id);
        $the_book->start_cover = optional(BookPhoto::where('book_id', $id)->first())->id;
        $the_book->end_cover = optional(BookPhoto::where('book_id', $id)->latest('id')->first())->id;
        $the_book->save();

        $request->session()->flash('success', 'Book Photo Created Successfully');
        return redirect('book/' . $id . '/show');

    }
}
