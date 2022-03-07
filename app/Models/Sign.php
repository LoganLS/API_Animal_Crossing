<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sign extends Model
{
    use HasFactory;


    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    static function getSign($lang, $sign)
    {
        return Language::where('name', $lang)
            ->first()
            ->sign()
            ->where('code', $sign)
            ->first();
    }
}
