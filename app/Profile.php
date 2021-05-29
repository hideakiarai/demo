<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_name' => 'required',
        'profession' => 'required',
        'country' => 'required',
    );
}
