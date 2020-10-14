<?php

namespace App\Http\Controllers;

use URL;
use Validator;
use App\Contact;
use App\Setting;
use App\Helpers\Helper;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Mail;

/**
 * Class ContactController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:12:00am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - contact';
        $contacts = Contact::all();
        return view('contact.index',compact('contacts','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $title = 'Create - contact';

        return view('contact.create',compact('settings'));
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
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_message' => 'required'
        ];

        $messages = [
            'required' => ':attribute مطلوب.',
            'email' => ':attribute يجب ان يكون صحيح.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $contact = new Contact();


        $contact->name = $request->contact_name;


        $contact->email = $request->contact_email;


        $contact->message = $request->contact_message;

        $contact->save();

        $mail = Helper::get_setting_by_key('Email');

        $subject = "Eltalhy Website";

        // $message = "Name: $contact->name<hr>Email: $contact->email<hr>Message: $contact->message";

        // mail($mail, $subject, $message);

        return view('contact_us', compact('contact'));

        Mail::send('contact_us', ['contact' => $contact], function ($messages) use ($mail, $subject, $contact) {
            $messages->from($contact->email, $contact->name);
            $messages->to($mail, 'Eltalhy Contact Us');
            $messages->subject($subject);
        });

        $request->session()->flash('success', 'تام ارسال الرساله بنجاح');

        return  back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$contact = Contact::findOrfail($id);
     	$contact->delete();
        return back();
    }
}
