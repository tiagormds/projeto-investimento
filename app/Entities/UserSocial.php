<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable     = ['user_id', 'social_id', 'social_network', 'social_email', 'social_avatar'];
}
