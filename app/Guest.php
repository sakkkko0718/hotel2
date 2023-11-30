<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('guest_id');

    public static $rules = array (
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required'
    );

    public static function getData($input){
        //$inputに入力した文字列と部分一致(like)した部屋を取得する。
        $data = Guest::where('name','like','%'.$input.'%')->get();
        return $data;
    }

    protected $primaryKey = 'guest_id';

    public function reservations(){
        return $this->hasMany('App\Reservation','guest_id','guest_id');
    }
}
