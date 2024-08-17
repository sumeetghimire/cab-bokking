<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      
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

        if (!Auth::check()) {
            $newData = $request->only('name', 'email', 'phone');
            $user = User::create($newData);
        } else {
            $user = Auth::user();
            $name = $user->name;
            $email = $user->email;
            $phone = $user->phone;
        }
        
        $bookById = $user->id;
        $tripId = $request->tripIds;
        $trips = Trip::find( $tripId );

        $pickupLocation =  $trips->pickupLocation;
        $dropLocation = $trips->dropLocation;
        $pickupDateTime = $trips->pickupDateTime;
        $driverId = $trips->driverId;
        $vehicleId = $trips->vehicleId;
        $estimateCordinatesPickup = $request->input('estimateCordinatesPickup');
        $bookingStatus = $request->input('bookingStatus');
    
       
            $booking = new Booking();
            $booking->bookById = $bookById;
            $booking->pickupLocation = $pickupLocation;
            $booking->dropLocation = $dropLocation;
            $booking->pickupDateTime = $pickupDateTime;
            $booking->driverId = $driverId;
            $booking->vehicleId = $vehicleId;
            $booking->estimateCordinatesPickup = $request->estimateCordinatesPickup;
            $booking->bookingStatus = 'pending';
            $booking->save();
        

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
