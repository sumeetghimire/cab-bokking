<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Extract data from the request
        $id = $request->input('id');
        $bookById = $request->input('bookById');
        $guestBooking = $request->input('guestBooking', false);
        $guessBookingId = $request->input('guessBookingId');
        $pickupLocation = $request->input('pickupLocation');
        $dropLocation = $request->input('dropLocation');
        $pickupDateTime = $request->input('pickupDateTime');
        $driverId = $request->input('driverId');
        $vehicleId = $request->input('vehicleId');
        $estimateCordinatesPickup = $request->input('estimateCordinatesPickup');
        $bookingStatus = $request->input('bookingStatus');
    
        if (Auth::check()) {
            $booking = new Booking();
            $booking->id = $id;
            $booking->bookById = $bookById;
            $booking->guestBooking = $guestBooking;
            $booking->guessBookingId = $guessBookingId;
            $booking->pickupLocation = $pickupLocation;
            $booking->dropLocation = $dropLocation;
            $booking->pickupDateTime = $pickupDateTime;
            $booking->driverId = $driverId;
            $booking->vehicleId = $vehicleId;
            $booking->estimateCordinatesPickup = $estimateCordinatesPickup;
            $booking->bookingStatus = $bookingStatus;
            $booking->save();
        } else {
            // User is not logged in, handle guest booking storage
            // Note: Implement your guest booking storage logic here
        }
    
        return response()->json(['message' => 'Booking created successfully'], 201);
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
