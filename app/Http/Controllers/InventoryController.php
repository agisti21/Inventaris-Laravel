<?php

namespace App\Http\Controllers;
use App\Inventory;
use App\Type;
use App\Room;
use App\Employee;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index',compact('inventories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms=Room::all();
        $employees=Employee::all();  
        $types=Type::all(); 
        return view('inventories.create',compact('types','rooms','employees',$rooms,$types,$employees));
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
        Inventory::create($request->all());
        return redirect()->route('inventories.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return view('inventories.show',compact('inventories'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     *
     *@param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        $types = Type::get();
        $employees = Employee::get();
        $rooms = Room::get();
        return view('inventories.edit', compact('types','rooms','employees','inventory'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update($request->all());
  
        return redirect()->route('inventories.index')
                        ->with('success','inventaris updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory $inventory)
    {
        $inventory->delete();
  
        return redirect()->route('inventories.index')
                        ->with('success','inventarises deleted successfully');
    }

}
