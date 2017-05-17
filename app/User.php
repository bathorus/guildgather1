<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'email', 'name', 'image', 'facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link', 'youtube_link', 'google_plus_link', 'about_me', 'forum_signature', 'role', 'last_notification_email', 'banned', 'banned_reason', 'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'role', 'password', 'remember_token',
    ];
}
