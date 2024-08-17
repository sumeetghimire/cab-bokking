<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class GuestBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tripId = $request->get('trip_id');
        $seatsOpted = $request->get('seatsOpted');
        return view('guestBooking.index')->with(compact('tripId','seatsOpted'));
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
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $tripId = $request->tripId;
        $seatsOpted = $request->seatsOpted;
        $user = User::where('email', $email)->first();
        if ($user) {
            Auth::login($user);
        } else {
            $randomPassword = Str::random(8);

            $hashedPassword = Hash::make($randomPassword);

            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phoneNumber' => $phone,
                'password' => $hashedPassword,
            ]);

        }
        Auth::login($user);
        $trips = Trip::find($tripId);
        return view('selectSeat.index')->with(compact('trips','seatsOpted','tripId'));


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
