<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chapters extends Model
{
    public function comics(){
        return $this->belongsTo(comics::class);
    }

    public function pages(){
        return $this->hasMany(pages::class);
    }
}
