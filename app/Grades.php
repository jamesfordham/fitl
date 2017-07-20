<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;
use Auth;
use App\coaches;
use App\players;


class Grades extends Model {
    protected $rules = [
        'grade' => ['required'],
        'comments' => ['required']
    ];

    //Access using, $grades->coaches
    public function coaches() {
        return $this->hasMany('App\Coaches'); //')->orderBy('year', 'desc');
    }

    public function players() {
        return $this->hasMany('App\players'); //')->orderBy('year', 'desc');
    }

   /* public function canEdit() {
        if (! Auth::check()) {
            return false;
        }

        if (Auth::user()->id==$this->user_id ) {  //NEED to add user_id column to Grades table for this to work
            return true;
        }
    } */
}