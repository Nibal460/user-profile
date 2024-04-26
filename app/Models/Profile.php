<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Assuming you have a user_id foreign key to associate profiles with users
        'fname',
        'lname',
        'email',
        'telephone',
        'location',
        // Add more attributes as needed
    ];

    // Define relationships with other models, if any
    public function user() // my error was I put users instead of user
    {
        return $this->belongsTo(User::class);
    }
    
    // Define an accessor to retrieve the associated user's username
    public function getUsernameAttribute()
    {
        return $this->user->username;
    }
}
