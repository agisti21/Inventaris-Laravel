<?php

namespace App\Http\Controllers;
use App\Detail;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();
        return view('details.index',compact('details'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('details.create');
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
        Detail::create($request->all());
        return redirect()->route('details.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('details.show',compact('detail'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view('details.edit', compact('detail'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        $detail->update($request->all());
  
        return redirect()->route('details.index')
                        ->with('success','details updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();
  
        return redirect()->route('details.index')
                        ->with('success','detail deleted successfully');
    }

}
