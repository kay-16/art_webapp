<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Profile extends Model
{
    /**
     * Get the User that owns the Profile
     */
    
    public function user(): BelongsTo  // a Profile could always fetch a user
    {
        return $this->belongsTo(User::class);
    }
}
