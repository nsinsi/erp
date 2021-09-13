<?php

namespace App\Http\Controllers;

use App\Models\Payableto;
use Illuminate\Http\Request;

class PayabletoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = Payableto::orderBy('id','DESC')->paginate(5);

       return view('payableto.index',compact('data'))

           ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


           return view('payableto.create');
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
          'full_name' => 'required',
          'account_number' => 'required',
          'bank_details' => 'required',
      ]);

      $input = $request->all();

      Payableto::create($input);

      return redirect()->route('payableto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payableto  $payableto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $payableto = Payableto::find($id);

      return view('payableto.show',compact('payableto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payableto  $payableto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $payableto = Payableto::find($id);

      return view('payableto.edit', compact('payableto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payableto  $payableto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $payableto = Payableto::findOrFail($id);

        $this->validate($request, [
            'full_name' => 'required',
            'account_number' => 'required',
            'bank_details' => 'required',
        ]);

        $input = $request->all();

        $payableto->fill($input)->save();

        return redirect()->route('payableto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payableto  $payableto
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
      $payableto = Payableto::findOrFail($id);

      $payableto->delete();

      return redirect()->route('payableto.index');
    }
}
