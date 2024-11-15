<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'start_date',
        'end_Date',
        'status',
              
    ];

    public function room()
    {
       return $this->hasOne('App\Models\Room', 'id', 'room_id');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
