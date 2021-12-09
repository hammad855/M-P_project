<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PickupRequest extends Model
{
    protected $fillable = [
        "name",
        "address",
        "email",
        "phone",
        "origin_city",
        "destination_city",
        "message",
    ];
}
