<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adomany extends Model
{
    use HasFactory;
    public $table = 'adomanyok';
    public $timestamps = false;
    public $guarded = [];

    public function adomanyNev(){
        return $this->belongsTo(AdomanyNev::class,'adomanyNev');
    }

    public function anyag(){
        return $this->belongsTo(Anyag::class,'anyag');
    }

    // Ezt használhatod a camelCase kulcshoz JSON-ban
    protected $with = ['adomanyNev', 'anyag'];

    public function toArray()
    {
        $array = parent::toArray();
        // Snake_case konverzió eltávolítása
        if(isset($array['adomany_nev'])) {
            $array['adomanyNev'] = $array['adomany_nev'];
            unset($array['adomany_nev']);
        }
        return $array;
    }

    
}
