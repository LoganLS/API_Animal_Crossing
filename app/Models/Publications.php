<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use CrudTrait;

    protected $table = 'publications';
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id'
    ];
}
