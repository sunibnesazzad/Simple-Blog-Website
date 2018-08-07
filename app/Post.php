<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Post extends Model
{
    use HasRoles;

    protected $guard_name = 'web'; // or whatever guard you want to use

    public function user(){
        return $this->belongsTo(User::class);
}

    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
