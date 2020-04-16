<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('work.viewWork',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works = Work::all();
        return view('work.addWork',compact('works'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work();
        Storage::disk('public')->delete($work->img);
        $image=Storage::disk('public')->put('', $request->img);

        $work->img=$image;
        $work->categorie=$request->input('categorie');
        $work->titre=$request->input('titre');        

        $work->save();
        return redirect()->route('work.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('work.editWork',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($work->img);
            $image=Storage::disk('public')->put('', $request->img);
            $work->img=$image;
        }
        $work->categorie=$request->input('categorie');
        $work->titre=$request->input('titre');        

        $work->save();
        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        Storage::disk('public')->delete($work->img);
        $work->delete();
        return redirect()->route('work.index');
    }
}
