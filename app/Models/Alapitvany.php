<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alapitvany extends Model
{
    use HasFactory;
    public $table = 'alapitvanyok';
    public $timestamps = false;
    public $guarded = [];

    public function ember(){
        return $this->belongsTo(Ember::class,'ember');
    }
}
