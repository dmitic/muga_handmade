<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    protected $table='proizvodi';
    protected $guarded = [];



    public function slike(){
        return $this->hasMany('App\Slike', 'proizvod_id', 'id');
    }
}
