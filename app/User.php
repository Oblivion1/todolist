<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Webpatser\Uuid\Uuid;

use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    protected static function boot()
    {
        parent::boot();

        // auto-sets values on creation
        static::creating(function ($user) {
            $user->uuid = Uuid::generate(4);
            $user->role_id = 1;
        });

        static::deleting(function($user) {
            $user->todolists()->delete();
        });
    }

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function todolists()
    {
        return $this->hasMany('App\Todolist');
    }
}
