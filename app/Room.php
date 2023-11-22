<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = array('room_id');

    public static $rules = array (
        'room_id' => 'required',
        'master_id' => 'required',
        'room_num' => 'required',
    );

    protected $primaryKey = 'room_id';

    public function master(){
        return $this->belongsTo('App\Master','master_id','master_id');
    }
}
