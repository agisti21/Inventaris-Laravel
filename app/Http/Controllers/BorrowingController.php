<?php

namespace App\Http\Controllers;
use App\Borrowing;
use App\Employee;
use App\Status;
use App\Inventory;

use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowings = Borrowing::all();
        return view('borrowings.index',compact('borrowings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventories=Inventory::all(); 
        $statuses=Status::all(); 
        $employees=Employee::all(); 
        return view('borrowings.create',compact('employees','statuses','inventories',$inventories,$employees,$statuses));
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
        Borrowing::create($request->all());
        return redirect()->route('borrowings.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function show(Borrowing $borrowing)
    {
        return view('borrowings.show',compact('borrowing'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrowing $borrowing)
    {
        $inventories = Inventory::get();
        $statuses = Status::get();
        $employees = Employee::get();
        return view('borrowings.edit', compact('inventories','employees','statuses','borrowing'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrowing $borrowing)
    {
        $borrowing->update($request->all());
  
        return redirect()->route('borrowings.index')
                        ->with('success','borrowings updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();
  
        return redirect()->route('borrowings.index')
                        ->with('success','borrowing deleted successfully');
    }

}
