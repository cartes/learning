<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Unit
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Unit query()
 * @mixin \Eloquent
 */
class Unit extends Model
{
    public function building() {
        return $this->belongsTo(Building::class)->select('id', 'name', 'building_id');
    }

    public function user() {
        return $this->belongsTo(User::class)->select('id', 'role_id', 'email', 'picture');
    }

    public function assignations() {
        return $this->hasMany(Assignation::class)->select('id', 'unit_id', 'assignation_id');
    }
}
