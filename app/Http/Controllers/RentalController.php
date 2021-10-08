<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Facades\DB;

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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $this->getQuery($request);
//        echo print_r($query, true);
        $findRental = DB::table('rentals')
            ->where($query)->get();

        return response($findRental)->header('Content-Type', 'application/json');
    }

    /**
     * Builds query from request.
     *
     * @param Request $request
     * @return array
     */
    private function getQuery(Request $request): array
    {
        $query = array();
        $name = $request->query('name');
        if (!is_null($name) && $name != 'null' && $name != '') {
            array_push($query, ['name', 'like', '%' . $name . '%']);
        }

        $bedrooms = $request->query('bedrooms');
        if (!is_null($bedrooms) && $bedrooms != 'null' && $bedrooms != '') {
            array_push($query, ['bedrooms', '=', $bedrooms]);
        }

        $bathrooms = $request->query('bathrooms');
        if (!is_null($bathrooms) && $bathrooms != 'null' && $bathrooms != '') {
            array_push($query, ['bathrooms', '=', $bathrooms]);
        }

        $storeys = $request->query('storeys');
        if (!is_null($storeys) && $storeys != 'null' && $storeys != '') {
            array_push($query, ['storeys', '=', $storeys]);
        }

        $garages = $request->query('garages');
        if (!is_null($garages) && $garages != 'null' && $garages != '') {
            array_push($query, ['garages', '=', $garages]);
        }

        $startPrice = $request->query('startPrice');
        if (!is_null($startPrice) && $startPrice != 'null' && $startPrice != '') {
            array_push($query, ['price', '>=', $startPrice]);
        }

        $endPrice = $request->query('endPrice');
        if (!is_null($endPrice) && $endPrice != 'null' && $endPrice != '') {
            array_push($query, ['price', '<=', $endPrice]);
        }
        return $query;
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
