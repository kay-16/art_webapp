<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /**
     * Get the User that owns the Posts
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); 
    }
}
