<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $guarded = array('id');
    public static $rules = array(
        'profile_id' => 'required',
        'updated_at' => 'required',
    );
}
