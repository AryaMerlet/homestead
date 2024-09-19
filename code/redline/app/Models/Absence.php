<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    public function absence(){
        return $this->belongsTo(Motif::class)->get();
    }

    public function allAbsence($clause){
        return Absence::where('id_user',$clause)->get();
    }
}
