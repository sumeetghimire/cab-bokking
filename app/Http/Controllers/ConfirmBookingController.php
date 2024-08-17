<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class ConfirmBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $optedSeats = $request->seats;
        $tripId = $request->tripId;
        $trips = Trip::with('vehicle', 'driver')
        ->find($tripId);
        $optedSeatsArray = explode(',', $optedSeats);
        $totalPassenger =  count($optedSeatsArray);
        $totalPrice = $totalPassenger*$trips->fareAmount;
        return view('confirmBooking.index')->with(compact('trips','optedSeats','totalPassenger','totalPrice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
