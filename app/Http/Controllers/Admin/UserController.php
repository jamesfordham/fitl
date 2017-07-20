<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Role;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('admin.users.index',['users' => $users]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        //$roles = Role::lists('name','id');
        $roles = Role::pluck('name', 'id');

        return view('admin.users.edit', ['user' => $user, 'roles' => $roles] );
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles()->sync($request->role_id);
        //if saves failed - redirect back to edit page with errors
        if ( ! $user->save()) {
            return redirect()->action('Admin\UserController@edit', $user->id)->with('errors', $user->getErrors())->withInput();
        }
        //success
        return redirect()->action('Admin\UserController@index', $user->id)->with('message','<div class="alert alert-success">Player updated OK</div>');
    }

    public function destroy($id) {

    }
}
