<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Note extends Model
{
    protected static function boot()
    {
        parent::boot();

        // auto-sets values on creation
        static::creating(function ($note) {
            $note->uuid = Uuid::generate(4);
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'user_id', 'todolist_id',
    ];

    public function todolist()
    {
        return $this->belongsTo('App\Todolist');
    }
}
