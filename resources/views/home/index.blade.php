@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="booking-form">
                        <h3>Let's get you a ride</h3>
                        <form id="searchCab" method="get" action="{{ route('search.index') }}">
                            @csrf
                            <div class="select-option">
                                <label for="pickup">Pickup/Source</label>
                                <select id="pickupLocation" name="pickupLocation" class="form-select"
                                    aria-label="Select From Location">
                                    <option value='' selected>Travelling From?</option>
                                    @foreach ($area as $areas)
                                        <option value={{ $areas->id }}>{{ $areas->areaName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input name="pickupCoordinates" type="hidden" id="pickupCoordinates">
                            {{-- //pickuppoint --}}
                            <div class="select-option" id="subAreaSelectOption" style="display: none;">

                            </div>
                            {{-- endpickup                                                                                                    --}}
                            <div class="select-option">
                                <label for="destination">Drop/Destination</label>
                                <select id="destinationLocation" name="destinationLocation" class="form-select"
                                    aria-label="Select From Location">
                                    <option selected>Travelling To?</option>
                                    @foreach ($area as $areas)
                                        <option value={{ $areas->id }}>{{ $areas->areaName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="select-option" id="subAreaSelectOptionDestination" style="display: none;">

                            </div>
                            <div class="select-option">
                                <label for="guest">Seats Opted:</label>
                                <select id="seatOpted" name="seatsOpted" id="guest">
                                    <option value="1">1 Seat</option>
                                    <option value="2">2 Seats</option>
                                    <option value="3">3 Seats</option>
                                    <option value="4">4 Seats</option>
                                </select>
                            </div>
                            <div class="query-phone">
                                <label for="Phone">Your Phone Number:</label>
                                <input id="phoneNumber" name="phoneNumber" type="text" class="query-phone"
                                    id="phone">
                                <i class="icon_phone"></i>
                            </div>
                            <div class="check-date">
                                <label for="DOJ">Date of Journey:</label>
                                <input id="journeyDate" name="dateofJourney" type="text" class="date-input"
                                    id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <button id="searchButton" type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="hero-text">
                        <h1>SwiftRide </h1>
                        <h2>"More Than Just a Ride, It's an Experience..."</h2>
                        <p>"Welcome to Sikkim Explore: your gateway to affordable and reliable transportation and tour
                            services in the breathtaking landscapes of Sikkim. Our website offers a range of budget-friendly
                            options, ensuring you can uncover the hidden gems of this Himalayan paradise without breaking
                            the bank. Whether you're seeking serene monastery visits or adrenaline-pumping adventures, our
                            expertly curated tours and taxi services are designed to cater to your every need. With Sikkim
                            Explore, embark on a journey of discovery, where affordability meets excellence."</p>
                        <a href="#" class="primary-btn">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Travel Plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Babysitting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Adventure Activities</span>
                        <h2>"Embrace the Thrill, Explore the Unknown!"</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Camping</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Copper Canyon</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
                        <div class="bi-text">
                            <span class="b-tag">Travel</span>
                            <h4><a href="#">Traveling To Barcelona</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- CTA Section Begin -->
    <section
        class="py-5 c2a6 CTAPadding "style="background-image:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/c2a/1.jpg)">
        <div class="container">
            <!-- row  -->
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2 class="mb-5">We're setting records with our rates. Ever considered teleportation as an
                        alternative?</h2>
                    <h6 class="subtitle font-weight-normal">Paying our fares is like buying a one-way ticket to the moon.
                        How about a rocketship for a change?</h6>
                   <button class="btn btnCTA btn-md mt-5">Book Your Ride Now</button>
                </div>
                <!-- <div class="col-md-12 text-center mt-3">
                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/c2a/1.jpg" alt="wrapkit" class="img-fluid" />
              </div> -->
            </div>
            <!-- row  -->
        </div>
    </section>
    <!-- CTA Section Begin -->



    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#pickupCoordinates").val(pickupLocation);
            $('#pickupLocation').change(function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                }

                function showPosition(position) {
                    var pickupCordinates = position.coords.latitude + ',' + position.coords.longitude;
                    $("#pickupCoordinates").val(pickupCordinates)
                }
                var areaID = $(this).val();
                if (areaID) {
                    $('#subAreaSelectOption').show();
                } else {
                    $('#subAreaSelectOption').hide();
                }
                $('#subAreaSelectOption').empty().append(`
            <label for="pickupSubLocation">Select Pickup Point</label>
            <select style="width: 100%; height: 4vh;" required name="pickupSubLocation" id="pickupSubLocation" class="form-select" aria-label="Select Sub-Area">
                <option selected value=''>Select Pickup Location</option>
            </select>
        `);

                if (areaID) {
                    $.ajax({
                        url: '/getSubAreas',
                        type: 'GET',
                        data: {
                            areaID: areaID
                        },
                        success: function(response) {
                            $.each(response.subAreas, function(key, value) {
                                console.log(value)
                                $('#pickupSubLocation').append('<option value="' + value
                                    .id + '">' + value.subAreaName + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            return position.coords.latitude
        }

        $(document).ready(function() {
            $("#destinationLocation").change(function() {
                $("#subAreaSelectOptionDestination")
                var areaID = $(this).val();
                if (areaID) {
                    $('#subAreaSelectOptionDestination').show();
                } else {
                    $('#subAreaSelectOptionDestination').hide();
                }
                $('#subAreaSelectOptionDestination').empty().append(`
            <label for="dropSubLocation">Select Drop Point</label>
            <select style="width: 100%; height: 4vh;" required name="dropSubLocation" id="dropSubLocation" class="form-select" aria-label="Select Sub-Area">
                <option selected value=''>Select Drop  Location Point</option>
            </select>
        `);

                if (areaID) {
                    $.ajax({
                        url: '/getSubAreas',
                        type: 'GET',
                        data: {
                            areaID: areaID
                        },
                        success: function(response) {
                            $.each(response.subAreas, function(key, value) {
                                console.log(value)
                                $('#dropSubLocation').append('<option value="' + value
                                    .id + '">' + value.subAreaName + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });

        $("#searchCab").submit(function(event) {
            event.preventDefault();

            var pickupLocation = $("#pickupLocation").val();
            var destinationLocation = $("#destinationLocation").val();
            var dropSubLocation = $("#dropSubLocation").val();
            var pickupSubLocation = $("#pickupSubLocation").val();
            var seatOpted = $("#seatOpted").val();
            var phoneNumber = $("#phoneNumber").val();
            var journeyDate = $("#journeyDate").val();
            var isEmpty = false;
            if (pickupLocation == '') {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Pickup Location Cannot be empty!",
                });
                return
            }
             else if (destinationLocation === '') {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You have not selected any drop location!",
                });
                return
            } else if (pickupSubLocation === dropSubLocation) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Pickup and drop location cannot be same",
                });
            return
            }
            if (dropSubLocation === "" || pickupSubLocation === "" || seatOpted === "" || phoneNumber === "" ||
                journeyDate === "") {
                isEmpty = true;
            }
            if (isEmpty) {
                // if (pickupLocation === "") {
                //     $("#pickupLocation").css("border", "2px solid red");
                // }
                // if (destinationLocation === "") {
                //     $("#destinationLocation").css("border", "2px solid red");
                // }
                if (dropSubLocation === "") {
                    $("#dropSubLocation").css("border", "2px solid red");
                }
                if (pickupSubLocation === "") {
                    $("#pickupSubLocation").css("border", "2px solid red");
                }
                if (seatOpted === "") {
                    $("#seatOpted").css("border", "2px solid red");
                }
                if (phoneNumber === "") {
                    $("#phoneNumber").css("border", "2px solid red");
                }
                if (journeyDate === "") {
                    $("#journeyDate").css("border", "2px solid red");
                }
            } else {
                $("#searchCab input, #searchCab select").css("border", "");
                $("#searchCab").off("submit");
                $("#searchCab").submit();
            }
        });

    </script>
@endsection
@endsection
