<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Investors;
use App\Http\Requests\StoreInvestorsRequest;
use Illuminate\Http\Request;

class InvestorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
            'status' => true,
            'data' => []
        ], 200);
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

        $investors = Investors::create($request->all());

        return response()->json([
            'message' => 'Investors created successfully',
            'data' => $investors
        ], 201);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investors  $Investors
     * @return \Illuminate\Http\Response
     */
    public function show(Investors $investors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investors  $Investors
     * @return \Illuminate\Http\Response
     */
    public function edit(Investors $investors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investors  $Investors
     * @return \Illuminate\Http\Response
     */
    public function update(StoreInvestorsRequest $request, Investors $investors)
    {
        //
        $investors->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Investors updated successfully',
            'investors' => $investors
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investors  $Investors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investors $investors)
    {
        //
        $investors->delete();

        return response()->json([
            'status' => true,
            'message' => 'Investors deleted successfully',
            'data' => $investors
        ], 200);
    }
}
