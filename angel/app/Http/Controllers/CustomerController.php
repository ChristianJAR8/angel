<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //dd($request->name);

        //$customers = Customer::where('id', '10')->get();

        //PARA HACER BBUSQUEDAS CON PAGINADO
        $customers = Customer::where('name','like','%'.$request->found.'%')->paginate(15);
        //dd($customers);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input());

        /*ES un arreglo manual
         * Customer::create([
            'name'=>$request->name
        ]);*/
        /*Aqui toma todo el arreglo */
        /*$request->validate([
            'name' => 'required',
            
        ]);*/
        $this->validador($request);
        Customer::create($request -> input());
        flash('Se guardo el registro correctamente')->success();
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
       return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //dd('hola');
        $this->validador($request);
        $customer->update(['name'=> $request->name]);
         flash('Se actualizo el registro correctamente')->success();
        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        flash('Se elimino el registro correctamente')->success();
        return redirect('customers');
    }
    public function validador($request)
    {   $request->validate([
            'name' => 'required',
            
        ]);

    }
}
