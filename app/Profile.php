<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table ='profiles';
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }

    public static  $platform= [
        'Php'=>'Php',
        'Android'=>'Android',
        'Laravel'=>'Laravel',
        'Java'=>'Java',
        'Python'=>'Python',
        'Ruby on Rails'=>'Ruby on Rails',
        'C & C++'=>'C & C++',
        'NodeJs'=>'NodeJs',
        'Sails'=>'Sails',
        'Express'=>'Express',
        'Spring'=>'Spring',
        'Jquery'=>'Jquery',
        'JavaScript'=>'JavaScript',
    ];
}
