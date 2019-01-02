<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignation extends Model
{
    public function unit() {
        return $this->belongsTo(Unit::class);
    }
}
