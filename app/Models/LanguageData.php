<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageData extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'languages_data';
    static function getFr()
    {
        return self::where('name', 'fr')->first();
    }

    static function getEn()
    {
        return self::where('name', 'en')->first();
    }

    public function gender()
    {
        return $this->hasMany(Gender::class, 'lang_id');
    }

    public function personality()
    {
        return $this->hasOne(Personality::class, 'lang_id');
    }

    public function spece()
    {
        return $this->hasOne(Species::class, 'lang_id');
    }

    public function sign()
    {
        return $this->hasOne(Sign::class, 'lang_id');
    }
}
