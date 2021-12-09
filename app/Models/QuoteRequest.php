<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class QuoteRequest extends Model
{
    protected $fillable = [
        "name",
        "company",
        "ntn",
        "city",
        "cnic",
        "address",
        "mobile",
        "email",
        "account_type",
        "business",
        "shipments_per_month",
        "details"
    ];
}
