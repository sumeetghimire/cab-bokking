<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory,HasUuids;
    protected $fillable = [
        'vechilesId',
        'driverId',
        'pickup',
        'destination',
        'departureTime',
        'totalAvailableSeats',
        'fareAmount',
        'departureDate'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vechile::class, 'vechilesId', 'id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driverId', 'id');
    }

    public function pickupLocation()
    {
        return $this->belongsTo(SubArea::class, 'pickup', 'id');
    }

    public function destinationLocation()
    {
        return $this->belongsTo(SubArea::class, 'destination', 'id');
    }

    public function pickup()
    {
        return $this->pickupLocation ? $this->pickupLocation->subAreaName : null;
    }

    public function destination()
    {
         return $this->destinationLocation ? $this->destinationLocation->subAreaName : null;
    }
}
