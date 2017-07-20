<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;
class ProfileController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function profile() {
        $user = Auth::user();
        //Now can retrieve from DB accordingly e.g
        //$grades = $user->grade;
        return view('profile.profile');
    }
}