<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_details extends Model
{
    protected $table = 'user_details';
    protected $guarded = [];
    
    use HasFactory;
}
