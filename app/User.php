<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'is_flagged',
        'user_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userType() {
        return $this->belongsTo(UserType::class);
    }

    public function getUsername() {
        return $this->username;
    }

    public function isAdmin() {
        return $this->userType()->where('id', 1)->exists();
    }

    public function isLandlord() {
        return $this->userType()->where('id', 2)->exists();
    }
}
