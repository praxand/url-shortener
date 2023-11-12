<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuickResponseCode extends Model
{
    protected $fillable = [
        'title',
        'original_link',
        'base64',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
