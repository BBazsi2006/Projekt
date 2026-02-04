<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ember extends Model
{
    use HasFactory;
    public $table = 'emberek';
    public $timestamps = false;
    public $guarded = [];
}
