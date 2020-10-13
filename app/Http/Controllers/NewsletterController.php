<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newsletter;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Validator;

/**
 * Class NewsletterController.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:10:41am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - newsletter';
        $newsletters = Newsletter::all();
        return view('newsletter.index',compact('newsletters','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $rules = [
            'contact_email' => 'required|email|unique:newsletters,email',
        ];

        $messages = [
            'required' => ':attribute مطلوب.',
            'email' => ':attribute يجب ان يكون صحيح.',
        ];
        
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return redirect('/#newsletter')->withErrors($validator)->withInput();
        }
        $newsletter = new Newsletter();

        
        $newsletter->email = $request->contact_email;

        
        
        $newsletter->save();

        $request->session()->flash('success', 'تم ارسال البريد الالكترونى بنجاح');
        // return redirect('/#newsletter');
        return response()->json(array('success'=> 'تم ارسال البريد الالكترونى بنجاح'), 200);
    }

    public function create()
    {
        $title = 'Campaign';
        return view('newsletter.campaign',compact('title'));
    }

    public function send_campain(Request $request)
    {
        $newsletters = Newsletter::all();
        
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$newsletter = Newsletter::findOrfail($id);
     	$newsletter->delete();
        return back();
    }
}
