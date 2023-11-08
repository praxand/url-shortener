<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shortlink extends Model
{
    protected $fillable = [
        'title',
        'original_link',
        'short_link',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function generateShortLink(): string
    {
        $random = substr(md5(microtime()), rand(0, 26), 5);

        $url = config('app.url');

        return $url . '/' . $random;
    }
}
