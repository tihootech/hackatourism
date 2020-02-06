<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
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

    // ==== new artisan account
    public static function newArtisan($username, $password)
    {
        $user = new self;
        $user->name = $username;
        $user->password = bcrypt($password);
        $user->type = 'artisan';
        $user->save();
        return $user;
    }

    public function owner()
    {
        return $this->hasOne(className($this->type), 'user_id');
    }
}
