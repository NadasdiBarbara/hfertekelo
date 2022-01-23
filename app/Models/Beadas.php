<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beadas extends Model
{
    use HasFactory;
    protected $fillable = ['class', 'name', 'url', 'points', 'message'];
}
