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
}
