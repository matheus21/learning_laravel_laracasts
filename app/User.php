<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
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
     *
     * Relationship between user and article.
     * A user can have many articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles() {

        return $this->hasMany('App\Article');

    }

    public function isATeamManager() {

        return true;

    }
}
