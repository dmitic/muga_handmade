<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakture extends Model
{
    protected $table = 'fakture';
    protected $guarded = [];


    public function stavke(){
        return $this->hasMany(Stavke::class);
        // return $this->hasMany('App\Stavke', 'fakture_id', 'id');
    }
}
