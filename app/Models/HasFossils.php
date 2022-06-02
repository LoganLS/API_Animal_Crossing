<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasFossils extends Model
{
    use HasFactory;

    protected $table = 'HasFossils';

    protected $fillable = [
        'user_id',
        'fossils_id',
    ];
}
