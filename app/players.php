<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class players extends Model
{
    protected $rules = [
        'grades_id' => ['required'],
        'name' => ['required'],
        'position' => ['required'],
        'briarsreg' => ['required'],
    ];
}
