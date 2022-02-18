<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Species extends Model
{
    use HasFactory;

    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    static function getSpece($lang, $spec)
    {
        return Language::where('name', $lang)
            ->first()
            ->spece()
            ->where('code', $spec)
            ->first();
    }
}
