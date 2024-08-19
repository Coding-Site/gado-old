<?php

namespace App\Http\Controllers;
use App\{
    unauht,
    Order,
};
use Illuminate\Http\Request;

class AnonymousUserController extends Controller
{

    public function index()
    {
        //
    }
    public function unAuthOrders()
    {
        // dd('dfdf');
        try{
            $orders = unauht::whereHas('order')->with('order')->where('status', 1)->get();

            // dd($orders);

            return view('unAuth', compact('orders'));
        }catch (\Exception $e) {
            // Handle any exceptions here
            dd($e); // For debugging purposes, you can dump the exception
        }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
