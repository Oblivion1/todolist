<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Todolist extends Model
{
    protected static function boot()
    {
        parent::boot();

        // auto-sets values on creation
        static::creating(function ($todolist) {
            $todolist->uuid = Uuid::generate(4);
        });

        static::deleting(function($todolist) {
            $todolist->notes()->delete();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }
}
