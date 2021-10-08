<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rental::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Query rental for the specified resource.
     *
     * @param  string $name
     * @param int $bedroom
     * @param int $bathroom
     * @param int $storey
     * @param int $garage
     * @param int $startPrice
     * @param  int  $endPrice
     * @return \Illuminate\Http\Response
     */
    public function search(string $name=null, int $bedroom=null, int $bathroom=null,
                           int    $storey=null, int $garage=null, int $startPrice=null,
                           int $endPrice=null)
    {
        //
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
