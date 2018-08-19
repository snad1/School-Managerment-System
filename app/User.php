<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public const ADMIN='admin';

    public const TEACHER='teacher';

    public const PARENT='parent';

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

    public function is_admin(){
        return $this->role==User::ADMIN;
    }

    public function is_teacher(){
        return $this->role==User::TEACHER;
    }

    public function is_parent(){
        return $this->role==User::PARENT;
    }
}
