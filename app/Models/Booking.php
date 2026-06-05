<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings'; // Specify the table name
    protected $primaryKey = 'booking_id'; // Specify the primary key column
    protected $fillable = ['service_id','booking_date','booking_time','payment_mode','Status']; // Add 'Status' to the fillable array

}
