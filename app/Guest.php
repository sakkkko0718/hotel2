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

    protected $primaryKey = 'guest_id';

    public function reservations(){
        return $this->hasMany('App\Reservation','guest_id','guest_id');
    }
}
