<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    // use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'mail', 'password', 'email_verified_at', 'email_verify_token', 'status', 'customer', 'designer', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //一対一
    public function designer()
    {
        return $this->hasOne('App\Designer');
    }

    //ロゴテーブルへ紐付け
    public function logo()
    {
        return $this->hasOne('App\Logo');
    }
}
