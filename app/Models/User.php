<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // use HasFactory, Notifiable;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'contact',
        'email',
        'address',
        'password',
        'userType',
        // 'remember_token'
    ];
    public $timestamps = false;
    use HasFactory;
    
}
