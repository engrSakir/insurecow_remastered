<?php

namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use App\Models\FarmerProfile;
use Illuminate\Http\Request;

class FarmerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("farmer.admin-content.profile.index");
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function show(FarmerProfile $farmerProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(FarmerProfile $farmerProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FarmerProfile $farmerProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(FarmerProfile $farmerProfile)
    {
        //
    }
}
