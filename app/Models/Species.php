<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Species extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'lang_id',
        'code',
        'name',
    ];

    public function lang(): BelongsTo
    {
        return $this->belongsTo(LanguageData::class, 'lang_id');
    }

    static function getSpece($lang, $spec)
    {
        return LanguageData::where('name', $lang)
            ->first()
            ->spece()
            ->where('code', $spec)
            ->first();
    }
}
