<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kiszallitas extends Model
{
    use HasFactory;
    public $table = 'kiszallitasok';
    public $timestamps = false;
    public $guarded = [];

     public function alapitvany()
    {
        return $this->belongsTo(Alapitvany::class, 'alapitvanyId');
    }

    public function adomany()
    {
        return $this->belongsTo(Adomany::class, 'adomanyId');
    }
}
