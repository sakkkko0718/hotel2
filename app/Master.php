<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    public static function getData($input){
        //$inputに入力した文字列と部分一致(like)した部屋を取得する。
        $data = Master::where('room_name','like','%'.$input.'%')->get();
        return $data;
    }

    protected $primaryKey = 'master_id';

    public function rooms(){
        return $this->hasMany('App\Room','master_id','master_id');
    }
}
