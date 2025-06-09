<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name (Laravel convention)
    // protected $table = 'contact_submissions'; // Not strictly needed here as it follows convention

    // The attributes that are mass assignable.
    // These fields can be safely filled via array assignments (e.g., ContactSubmission::create($data)).
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}