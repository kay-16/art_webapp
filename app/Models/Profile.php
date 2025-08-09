<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Get the User that owns the Profile
     */
    
    public function user()  // a Profile could always fetch a user
    {
        return $this->belongsTo(User::class);
    }
}
