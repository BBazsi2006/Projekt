<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdomanyNev extends Model
{
    use HasFactory;
    public $table = 'adomanynevek';
    public $timestamps = false;
    public $guarded = [];
}
