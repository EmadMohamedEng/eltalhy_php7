<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Message;
use App\Setting;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - messages';
        $messages = Message::all();
        return view('message.index',compact('messages','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - message';

        return view('message.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $message = new Message();

        $message->title = $request->title;
        $message->message = $request->message;
        $message->save();
        $request->session()->flash('success', 'create successfully');

        return redirect('message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Show - Message';
        $message = Message::findOrfail($id);
        return view('message.show',compact('message','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Show - Message';
        $message = Message::findOrfail($id);
        return view('message.edit',compact('message','title'));
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
            'title' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $message = Message::findOrfail($id);

        $message->title = $request->title;
        $message->message = $request->message;
        $message->save();
        $request->session()->flash('success', 'updated successfully');

        return redirect('message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrfail($id);
        $message->delete();
        return back();
    }

    public function messages()
    {
        $settings_ = Setting::all();
        $settings = array();
        foreach ($settings_ as $setting) {
            $settings[$setting->key] = $setting->value;
        }
        $messages = Message::paginate(6);
        return view('message.messages',compact('messages','settings'));
    }
}
