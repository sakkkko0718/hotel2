<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('reservation_id');

    public static $rules = array (
        'guest_id' => 'required',
        'people' => 'required',
        'checkin' => 'required',
        'checkout' => 'required'
    );

    public static function getData($from,$until){
        $data = Reservation::whereBetween('checkin',[$from,$until])->get();
        return $data;
    }

    protected $primaryKey = 'reservation_id';

    public function guest(){
        return $this->belongsTo('App\Guest','guest_id','guest_id');
    }

    public function room(){
        //モデル、中間テーブル、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー
        return $this->belongsToMany('App\Room','reservation_room','room_id','reservation_id')
        ->withPivot('day','price')
        ->withTimestamps();
    }
}
