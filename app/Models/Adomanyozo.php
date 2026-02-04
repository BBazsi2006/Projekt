<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adomanyozo extends Model
{
    use HasFactory;
    public $table = 'adomanyozok';
    public $timestamps = false;
    public $guarded = [];

    public function ember(){
        return $this->belongsTo(Ember::class,'ember');
    }
}
