<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 1;
    const RESIDENT = 2;
    const STAFF = 3;
}
