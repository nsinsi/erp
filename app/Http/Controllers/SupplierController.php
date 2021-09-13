<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = Supplier::orderBy('id','DESC')->paginate(5);

       return view('supplier.index',compact('data'))

           ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
      ]);

      $input = $request->all();

      Supplier::create($input);

      return redirect()->route('supplier.index')->with('success','Supplier added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
      $supplier = Supplier::find($id);

      return view('supplier.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $supplier = Supplier::find($id);

      return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $supplier = Supplier::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',

        ]);

        $input = $request->all();

        $supplier->fill($input)->save();

        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
      $supplier = Supplier::findOrFail($id);

      $supplier->delete();

      return redirect()->route('supplier.index');
    }
}
