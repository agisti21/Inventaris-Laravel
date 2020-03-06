<?php

namespace App\Http\Controllers;
use App\Level;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::all();
        return view('levels.index',compact('levels'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('levels.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          
        ]);
        Level::create($request->all());
        return redirect()->route('levels.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        return view('levels.show',compact('level'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        $level->update($request->all());
  
        return redirect()->route('levels.index')
                        ->with('success','level updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        $level->delete();
  
        return redirect()->route('levels.index')
                        ->with('success','level deleted successfully');
    }

}
