<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Exception;

class CountryController extends Controller
{

    function __construct() {
        if(!\Auth::check()){
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doGet()
    {
        header("Content-type: text/html; charset=utf-8");
        // $countries = DB::select('select * from country where status=:status', [":status" => 1]);
        $countries = \App\Country::all();
        return \Response::json($countries);
    }

    public function ViewList()
    {
        $countries = \DB::select('SELECT * from country where status=:status', [":status" => 1]);
        return view('cms/country/list', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $new = $request->only('contry_code', 'contry_name_tc', 'contry_name_en', 'contry_name_sc');
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
    public function doDetail($id)
    {
        $countries = [];
        if(!empty($id)){
            $countries = DB::select('SELECT * from country where country_id=:country_id and status=:status LIMIT 1', [
                ":status" => 1,
                ":country_id" => $id
            ]);
        }
        return $countries;
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
    public function doUpdate(Request $request, $id)
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
