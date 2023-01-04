<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'address', 'gender', 'dob', 'phone_number'
    , 'experience', 'bio', 'cover_letter', 'resume', 'avatar'
    ];
}
