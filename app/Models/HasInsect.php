<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasInsect extends Model
{
    use HasFactory;

    protected $table = 'has_insects';

    protected $fillable = [
        'user_id',
        'insect_id',
    ];
}
