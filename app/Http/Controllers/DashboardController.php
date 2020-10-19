<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use App\Slider;
use App\Setting;
use App\Audio;
use App\Category;
use App\Newsletter;
use App\Photo;
use App\Section;
use App\Book;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        $sliders = Slider::all();
        $settings = Setting::all();
        $audios = Audio::all();
        $categories = Category::all();
        $newsletters = Newsletter::all();
        $books = Book::all();
        $photos = Photo::all();
        $title = 'Dashboard';
        return view('dashboard.index',compact('title','videos','sliders','settings','audios','categories','newsletters','books','photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function file_manager()
    {

        $iv = str_repeat(chr(0), 16);
        $cookie_name = "nn"; // username
        $method= "aes-128-cbc";
        $cookie_value = env('DB_USERNAME') ;
        $ENCRYPTION_KEY = '!@#$$%~##!@' ;
        $cookie_value = openssl_encrypt($cookie_value, $method, $ENCRYPTION_KEY, 0, $iv);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/"); // 86400 = 1 day

        $cookie_name = "pp"; // password
        $method= "aes-128-cbc";
        $cookie_value = env('DB_PASSWORD') ;
        $ENCRYPTION_KEY = '!@#$$%~##!@' ;
        $cookie_value = openssl_encrypt($cookie_value, $method, $ENCRYPTION_KEY, 0, $iv);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/"); // 86400 = 1 day


        $cookie_name = "dd"; // database name
        $method= "aes-128-cbc";
        $cookie_value = env('DB_DATABASE') ;
        $ENCRYPTION_KEY = '!@#$$%~##!@' ;
        $cookie_value = openssl_encrypt($cookie_value, $method, $ENCRYPTION_KEY, 0, $iv);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/"); // 86400 = 1 day

        return view('dashboard.file_manager');
    }

    public function multi_upload()
    {
        return view('dashboard.multi_uploader') ;
    }

    public function save_uploaded(Request $request)
    {
        if (!file_exists('uploads/' . date('Y-m-d') . '/')) {
            mkdir('uploads/' . date('Y-m-d') . '/', 0777, true);
        }
        $vpb_file_name = strip_tags($_FILES['upload_file']['name']); //File Name
        $vpb_file_id = strip_tags($_POST['upload_file_ids']); // File id is gotten from the file name
        $vpb_file_size = $_FILES['upload_file']['size']; // File Size
        $vpb_uploaded_files_location = 'uploads/' . date('Y-m-d') . '/'; //This is the directory where uploaded files are saved on your server

        $vpb_final_location = $vpb_uploaded_files_location . $vpb_file_name ; //Directory to save file plus the file to be saved
        //Without Validation and does not save filenames in the database
        if (move_uploaded_file(strip_tags($_FILES['upload_file']['tmp_name']), $vpb_final_location)) {
            //Display the file id
            echo $vpb_file_id;
        } else {
            //Display general system error
            echo 'general_system_error';
        }

    }



}
