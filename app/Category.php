<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Category extends Model
{
    use HasRoles;
    protected $guard_name = 'web'; // or whatever guard you want to use

    protected $table='categories';

    public function post(){
        return $this->hasMany(Post::class);
    }
}
