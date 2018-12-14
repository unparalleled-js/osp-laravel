<?php

namespace App;

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

    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'owner_id');
    }

    public function contributions()
    {
        return $this->hasMany('App\Models\Contributor', 'user_id');
    }

    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark');
    }
}
