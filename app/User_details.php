<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

//za softdelete
// use Illuminate\Database\Eloquent\SoftDeletes;

class User_details extends Model
{
    //za softdelete
    // use SoftDeletes; 

    protected $table = 'user_details';
    protected $dates = ['deleted_at'];
    protected $guarded = [];


    // public function pripada(){
    //     return $this->belongsTo(User::class);
    // }
}
