<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany('App\Role','users_roles');
    }

    public function hasRole($role) {
        //Get array on only the role names
        $roleNames = $this->roles->pluck('name')->toArray();
        return in_array($role, $roleNames);
    }

    public function isAdmin() {
        return $this->hasRole('Admin');
    }
}
