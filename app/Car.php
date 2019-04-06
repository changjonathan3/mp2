<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Car extends Model
{
    use Notifiable;

    protected $fillable = [
        'Make', 'Model', 'Year',
    ];
    protected $casts = [
        'Year' => 'integer',
    ];
}
