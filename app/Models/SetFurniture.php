<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetFurniture extends Model
{

    protected $table = 'set_furnitures';
    protected $fillable = [
        'label'
    ];

    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
}
