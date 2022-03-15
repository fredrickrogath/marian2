<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'job_title', 
        'status', 
        'company', 
        'contacts', 
        'city', 
        'state', 
        'user_id'
    ];
}
