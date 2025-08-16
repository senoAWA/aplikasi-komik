<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    public function chapters(){
        return $this->belongsTo(chapters::class);
    }
}
