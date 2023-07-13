<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondHalf extends Model
{    
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'math',
        'en',
        'cs',
        'history',
        'biology',
        'literature',
        'rus',
        'geography',
        'economics',
        'design',
        'management',
    ];
}
