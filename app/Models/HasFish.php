<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasFish extends Model
{
    use HasFactory;
    protected $table = 'has_fishes';

    protected $fillable = [
        'user_id',
        'fish_id',
    ];
}
