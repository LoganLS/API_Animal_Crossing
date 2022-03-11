<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Insect extends Model
{
    use HasFactory;

    protected $table = 'bugs';
    protected $fillable = [
        'name',
        'url',
        'icon_url',
        'image_url',
        'catchphrase',
        'catchphrase2',
        'location',
        'rarity',
        'total_catch',
        'sell_nook',
        'sell_flick',
        'tank_width',
        'tank_length',
        'time',
        'n_availability',
        's_availability',
        'lang_id',
    ];

    public function lang(): BelongsTo
    {
        return $this->belongsTo(LanguageData::class, 'lang_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'has_insects', 'user_id', );
    }
}
