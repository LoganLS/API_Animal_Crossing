<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Music extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'musics';

    protected $fillable = [
        'file_name',
        'name',
        'image_url',
        'music_url',
        'buy_price',
        'sell_price',
        'lang_id',
    ];

    public function lang(): BelongsTo
    {
        return $this->belongsTo(LanguageData::class, 'lang_id');
    }
}
