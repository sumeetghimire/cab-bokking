@extends('layouts.app')

@section('content')

@section('style')
<style>
    body {
        color: #616161;
        overflow-x: hidden;
        height: 100%;
        background-color: #ECEFF1;
        background-repeat: no-repeat;
    }
    
    .card-strip {
        background-color: #fff;
        padding: 25px;
        width: 950px;
        margin: 20px auto;
        border-radius: 3px;
        box-shadow: 0px 8px 16px 0px #E0E0E0;
    }
    
    .dark-text {
        color: #000;
    }
    
    .extended-title {
        color: #757575;
        background-color: #E0E0E0;
        padding: 1px 5px;
    }
    
    .fa-star {
        color: #E0E0E0;
    }
    
    .fa-star.active {
        color: #FFC400;
    }
    
    .green-block {
        color: #00695C;
        background-color: #B2DFDB;
        padding: 3px 20px;
        border-radius: 2px;
    }
    
    .comp-logo {
        height: 97px;
    }
    
    .v-line {
        width: 1px;
        background-color: #E0E0E0;
        margin-right: 50px;
    }
    
    .blue-text {
        color: #FF9800;
        font-weight: 300;
    }
    
    .price-fall {
        font-size: 17px;
    }
    
    .btn-orange {
        background-color: #FF9800;
        color: #ffffff;
        width:50%;
        text-transform: uppercase;
    }
    
    @media screen and (max-width: 1012px) {
        .card-strip {
            width: 100%;
        }
    }
    
    @media screen and (max-width: 859px) {
        .v-line {
            display: none;
        }
    
        .price { 
            width: 100%;
            margin-left: 95px;
        }
    }
    
    @media screen and (max-width: 529px) {
        .price {
            margin-left: 0px;
        }
    }
    </style>
@endsection

@if(count($trips)>0)
@foreach($trips as $trip)
<section class="hero-section" style="padding-top:0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="section-title">                        
                        <h2>Available Cabs</h2>
                    </div>
            </div>
        <div class="col-lg-12 ">
        <div class="row d-flex justify-content-start card-strip">
        <img class="comp-logo mr-4 mb-4" src=" {{$trip->vehicle->vechileImageUrl}}">
        <div class="info">
            <div class="row px-3 mb-2">
                <h4 class="dark-text mr-4"> {{$trip->vehicle->vechileName}} </h4>                    
            </div>
            <div class="row px-3 mb-2">
                <p class="mb-1"><span class="fa fa-wifi"> Wifi</span></p>
                <p class="mb-1"><span class="fa fa-tint ml-4"> Water</span></p>
                <p class="mb-1"><span class="fa fa-thermometer-full ml-4"> AC</span></p>
                <p class="mb-1"><span class="fa fa-cutlery ml-4"> Snack</span></p>
            </div>
            
            <div class="row px-3 mb-3">
                <span class="fa fa-star pr-1 mt-1 active"></span>
                <span class="fa fa-star pr-1 mt-1 active"></span>
                <span class="fa fa-star pr-1 mt-1 active"></span>
                <span class="fa fa-star pr-1 mt-1"></span>
                <span class="fa fa-star pr-1 mt-1 mr-2"></span>
                <span><strong>28</strong> Ratings</span>
            </div>
            <div class="row px-3">
                <p><h5 class="green-block"> Seats Left : {{$trip->vehicle->availableSeats}}</h5></p>
            </div>                                
        </div>
        <div class="v-line ml-auto"></div>
        <div class="price">
            <p class="mb-0">Pickup Time</p>
            <h4 class="blue-text mb-3">{{$trip->departureTime}}</h4>
            <p class="mb-0">Price/seat</p>
            <div class="row px-3">
                <h4 class="blue-text mr-2">Rs {{$trip->fareAmount}}</h4>
                <p class="mt-1 price-fall mr-5"><del>Rs 1190.00</del></p>
            </div>
            @if(Auth::check()===false)
            <div id="bookAsa" class="btn btn-orange mt-4" data-trip-id="{{ $trip->id }}">Book Now</div>
            @else 
            <div  class="btn btn-orange mt-4"><a style="color:white" href="/bookingAsLogin?trip_id={{ $trip->id }}&&seatsOpted={{$seatsOpted}}">Book Now</a></div>

            @endif

        </div>
    </div>
    @endforeach

    @else
    <div class="col-lg-12">
        <div class="section-title">                        
            <h2>Ohho No cab available at selected time</h2>
        </div>
</div>
    @endif

    
            </div>
            
        </div>
    </div>
    <!-- <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div> 
        <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>          
    </div> -->
</section>
@section('scripts')
<script>
$("#bookAsa").click(function(){
    var tripId = $(this).data('trip-id');
    var seatsOpted = {{$seatsOpted}}
    Swal.fire({
        title: "Book as a",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Login",
        denyButtonText: `Guest`,
        confirmButtonColor: '#3085d6',
        denyButtonColor: '#d33',
        focusDeny: true
    }).then((result) => {
        if (result.isConfirmed) {
                    window.location.href = "/login?trip_id=" + tripId + "&&"+ "seatsOpted="+seatsOpted;
                } else if (result.isDenied) {
                    window.location.href = "/guestbooking?trip_id=" + tripId + "&&"+ "seatsOpted="+seatsOpted;
                
        } else {
        }
    });
});


</script>

@endsection
@endsection