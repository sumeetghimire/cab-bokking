@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="movie-container col-md-12">
            <label>Select the Seats</label>
        </div>

        <div style="display: flex;">
            <ol class="cabin fuselage col-md-6">
                @php
                    $availableSeats = json_decode($trips->availableSeats, true);
                    $rows = 3;
                    $columns = ['A', 'B'];
                    $availableSeatsString = implode(', ', $availableSeats);

                @endphp

                @for ($row = 1; $row <= $rows; $row++)
                    <li class="row row--{{ $row }}">
                        <ol class="seats" type="A">
                            @foreach ($columns as $column)
                                @php
                                    $seatId = $row . $column;
                                @endphp

                                <li class="seat">
                                    @if (in_array($seatId, $availableSeats))
                                        <input type="checkbox" id="{{ $seatId }}" />
                                        <label for="{{ $seatId }}">{{ $seatId }}</label>
                                    @else
                                        @if ($seatId == '1B')
                                            <input type="checkbox" id="{{ $seatId }}" disabled />
                                        @endif
                                        <label for="{{ $seatId }}" class="booked">{{ $seatId }}</label>
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </li>
                @endfor
            </ol>

            <div class="booking-form">
                <div class="seatselect">
                    <ul class="showcase">
                        <li>
                            <div class="info-available"></div>
                            <small class="mr-2">Available Seats</small>
                            {{ $availableSeatsString }}

                        </li>
                        <li>
                            <div class="info-selected"></div>
                            <small>Selected Seats</small>

                        </li>
                        <li>
                            <div class="info-occupied"></div>
                            <small>Occupied Seats</small>
                        </li>
                    </ul>

                    <div style="padding: 15px;">
                        <label>Seat Number</label>
                        <span id="selectedSeatsDisplay"> </span>
                    </div>
                    <form>
                        <button id="submitButton" class="button">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#submitButton').click(function() {
                event.preventDefault();
                var selectedSeats = [];

                $('input[type="checkbox"]:checked').each(function() {
                    selectedSeats.push($(this).attr('id'));
                });
                var seatsOpted = {{ $seatsOpted }}
                var selectedSeatsCount = selectedSeats.length;
                if (selectedSeatsCount > seatsOpted) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You opted for only "+seatsOpted+ " seats",
                    });
                }
                else if (selectedSeatsCount < seatsOpted) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You opted for "+seatsOpted+ " seats",
                    });
                }
                else {
                    var tripId = "{{$tripId}}"
                    var finalconfirm = '/finalConfirm?seats=' + encodeURIComponent(selectedSeats) + '&tripId=' + encodeURIComponent(tripId);
                    window.location.href = finalconfirm;
                }
            });
        });



        $(document).ready(function() {
            $('input[type="checkbox"]').change(function() {
                var selectedSeats = [];

                $('input[type="checkbox"]:checked').each(function() {
                    selectedSeats.push($(this).attr('id'));
                });

                var selectedSeatsString = selectedSeats.join(', ');
                $('#selectedSeatsDisplay').text(selectedSeatsString);

            });
        });
    </script>
@endsection
