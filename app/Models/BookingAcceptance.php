<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingAcceptance extends Model
{
    use HasFactory;

    protected $table = 'bookingacceptance';
    protected $primarykey = 'Aceptance_id';
}
