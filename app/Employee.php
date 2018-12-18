<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Employee
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee query()
 * @mixin \Eloquent
 */
class Employee extends Model
{
    const AFP = 1;
    const ISAPRE = 2;
    const CCAF = 3;
    const OTHER = 4;
}
