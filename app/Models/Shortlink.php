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
}
