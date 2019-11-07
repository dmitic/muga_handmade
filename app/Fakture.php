<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakture extends Model
{
    protected $table = 'fakture';
    protected $guarded = [];


    public function stavke(){
        return $this->hasMany('App\Stavke', 'faktura_id', 'id');
    }
}
