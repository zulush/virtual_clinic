<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_time extends Model
{
    use HasFactory;

    protected $fillable = [
        'calendar_id',
        'day',
        'start',
        'end',
    ];
}
