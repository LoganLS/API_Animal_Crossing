<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fossils extends Model
{
    use CrudTrait;
    protected $table = 'fossils';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'image_url',
        'prix',
        'fossil_group',
        'width',
        'length'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'has_fossils', 'user_id', );
    }
}
