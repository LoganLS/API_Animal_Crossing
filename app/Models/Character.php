<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    use HasFactory;

    public function lang(): BelongsTo
    {
        return $this->belongsTo(LanguageData::class, 'lang_id');
    }
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }
}
