<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    protected $table='roles';

    public function user(){
        return $this->hasMany(User::class);
    }
}
