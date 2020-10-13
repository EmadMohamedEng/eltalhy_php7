<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Setting;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;
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
