<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'lang_id',
        'code',
        'gender_id',
    ];

    static function getPersonality($lang, $personality)
    {
        return Language::where('name', $lang)
            ->first()
            ->personality()
            ->where('code', $personality)
            ->first();
    }
}
