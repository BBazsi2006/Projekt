<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anyag extends Model
{
    use HasFactory;
    public $table = 'anyagok';
    public $timestamps = false;
    public $guarded = [];
}
