<?php

namespace App\Http\Controllers;

use App\MyProfil;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $roles = Role::all();
        return view('myProfil',compact('user','roles'));
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
     * @param  \App\MyProfil  $myProfil
     * @return \Illuminate\Http\Response
     */
    public function show(MyProfil $myProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyProfil  $myProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $user = Auth::user();
        return view('user.editMyProfil',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyProfil  $myProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=> 'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
       
        
        $user->save();
        return redirect()->route('MyProfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyProfil  $myProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyProfil $myProfil)
    {
        //
    }
}
