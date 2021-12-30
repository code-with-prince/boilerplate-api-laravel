<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property mixed $firstname
 * @property mixed $lastname
 * @property mixed $email
 * @property mixed $password
 * @property mixed $email_verification_code
 * @property mixed $profile_picture
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'email_verification_code', 'profile_picture'];

    protected $hidden = ['password', 'email_verification_code', 'phone_verification_code'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];
}
