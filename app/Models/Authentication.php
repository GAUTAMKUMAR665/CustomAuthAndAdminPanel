<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
//use Illuminate\Database\Eloquent\Model;

class Authentication extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $fillable=['name','email','phone','is_verified','password','confirmpassword'];

    protected $hidden=['password','confirmpassword'];

    public function getJWTIdentifier()
    {
        return $this->getkey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
