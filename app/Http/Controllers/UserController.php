<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Users';
        $users = User::all()->except(Auth::id());
        return view('user.index',compact('users','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - Users';
        return view('user.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $request->session()->flash('success', 'User created successfull');

        return redirect('user');
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
        $user = User::findOrFail($id);
        $title = 'Update - Users';
        return view('user.edit',compact('user','title'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'filled',
            'email' => 'filled|email|unique:users,email,'.$id,
            'password' => 'filled|min:6',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if (($request->password)!=null) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        $request->session()->flash('success', 'Updated created successfull');

        return redirect('user');
    }

    public function deleteSelected(Request $request)
    {
        $items = explode(',',$request->items);
        foreach ($items as $item) {
            $user = User::findOrFail($item);
            $user->delete();
        }
        return $items;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }
}
