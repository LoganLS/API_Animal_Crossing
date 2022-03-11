<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Insect extends Model
{
    use HasFactory;

    protected $table = 'bugs';

    public function lang(): BelongsTo
    {
        return $this->belongsTo(LanguageData::class, 'lang_id');
    }
}
