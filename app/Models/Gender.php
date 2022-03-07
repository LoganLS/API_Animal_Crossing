<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gender extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'lang_id',
        'name',
        'gender',
    ];

    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    static function getGender($lang, $gender, $field = 'gender')
    {
        return Language::where('name', $lang)
            ->first()
            ->gender()
            ->where($field, $gender)
            ->first();
    }
}
