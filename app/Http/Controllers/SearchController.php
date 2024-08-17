<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pickupLocation = $request->pickupSubLocation;
        $destinationLocation = $request->dropSubLocation;
        $seatsOpted = $request->seatsOpted;
        $departureDate = date('Y-m-d', strtotime($request->dateofJourney));
        $trips = Trip::where('pickup', $pickupLocation)
                     ->where('destination', $destinationLocation)
                     ->whereDate('departureDate', $departureDate)
                     ->with('vehicle','driver')
                     ->get();
        return view('search.index', compact('trips','seatsOpted'));

        // if ($trips->isEmpty()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'No trips found for the provided details'
        //     ]);
        // } else {
        //     return response()->json([
        //         'status' => 'success',
        //         'trips' => $trips
        //     ]);
        // }
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
        //
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
