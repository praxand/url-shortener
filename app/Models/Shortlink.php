<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shortlink extends Model
{
    protected $fillable = [
        'title',
        'original_link',
        'alias',
        'password',
        'expires_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
        'expires_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function generateShortLink($custom = null): string
    {
        $alias = $custom ?? substr(md5(microtime()), rand(0, 26), 5);

        return $alias;
    }

    public function url(): string
    {
        return config('app.url') . '/' . $this->alias;
    }
}
