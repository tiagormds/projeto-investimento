<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable     = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'permission'];
    protected $hidden       = ['password', 'remember_token'];
}
