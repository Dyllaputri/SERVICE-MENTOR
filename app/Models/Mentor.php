<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory;
    protected $guarded= ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'profile', 'email', 'profession'];
}
