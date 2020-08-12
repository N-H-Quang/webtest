<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table='admin';
    protected $guarded =['id'];
    protected $fillable=['name','email','email_verified_at'];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
