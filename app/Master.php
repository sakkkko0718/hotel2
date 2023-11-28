<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $primaryKey = 'master_id';

    // public static function getData($input){
    //     $data = Master::whereBetween('')
    // }

    public function rooms(){
        return $this->hasMany('App\Room','master_id','master_id');
    }
}
