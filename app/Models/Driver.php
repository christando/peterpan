<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use HasFactory;

    protected $table = "driver";

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    
}
