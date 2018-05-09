<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phno', 'address', 'region', 'lat', 'lng', 'is_confirmed', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){
        if($this->status == "admin"){
            return true;
        }
        return false;
    }

    public function isConfirm(){
        if($this->is_confirmed == 1){
            return true;
        }
        return false;
    }
}
