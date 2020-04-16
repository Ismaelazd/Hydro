<?php

namespace App\Http\Controllers;

use App\About;
use App\Skill;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class, 'admin');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin',User::class);
        $abouts = About::all();
        $skills = Skill::all();
        return view('about.viewAbout',compact('abouts','skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin',User::class);
        $abouts = About::all();
        $skills = Skill::all();
        return view('about.addAbout',compact('abouts','skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin',User::class);
        $about = new About();
        Storage::disk('public')->delete($about->img);
        $image=Storage::disk('public')->put('', $request->img);

        $about->img=$image;
        $about->description=$request->input('description');
        $about->description2=$request->input('description2');        

        $about->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $this->authorize('admin',User::class);
        return view('about.editAbout',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->authorize('admin',User::class);
        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($about->img);
            $image=Storage::disk('public')->put('', $request->img);
            $about->img=$image;
        }
        $about->description=$request->input('description');
        $about->description2=$request->input('description2');        

        $about->save();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $this->authorize('admin',User::class);
        Storage::disk('public')->delete($about->img);
        $about->delete();
        return redirect()->route('about.index');
    }
}
