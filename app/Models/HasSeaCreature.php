<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasSeaCreature extends Model
{
    use HasFactory;

    protected $table = 'has_sea_creatures';

    protected $fillable = [
        'user_id',
        'sea_creature_id',
    ];
}
