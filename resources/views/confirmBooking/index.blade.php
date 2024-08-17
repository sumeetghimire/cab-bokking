@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $trips->vehicle->vechileImageUrl }}" alt="Card image cap">
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Your Name: {{ Auth::user()->name }}</li>
                    <li class="list-group-item">Ticket Confirmation will send to: <span class="font-bold">{{ Auth::user()->email }} </span></li>
                    <li class="list-group-item">Detination : {{$trips->destination()}}</li>
                    <li class="list-group-item">Vechile Number : {{$trips->vehicle->vehicleNumber}}</li>
                    <li class="list-group-item">Pickup : {{$trips->pickup()}}</li>
                    @php
                    $time12hr = date("h:i A", strtotime($trips->departureTime));
                      @endphp
                    <li class="list-group-item">Departure Time : {{$time12hr}}</li>
                    <li class="list-group-item">Departure Date : {{$trips->departureDate}}</li>
                    <li class="list-group-item">Total Passenger : {{$totalPassenger}}</li>
                    <li class="list-group-item">Selected Seat : {{$optedSeats}}</li>
                    <li class="list-group-item">Total Price : {{$totalPrice}}</li>

                </ul>
                
                <button style="background: #FF9800; padding: 10px 20px; border-radius: 5px; border: none; color: white; font-size: 16px;" id="submitButton" class="primary-btn">Continue to payment</button>
            </div>
        </div>
    </div>
</div>



@endsection