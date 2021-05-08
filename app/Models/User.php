<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class User extends Authenticatable
{
  use HasFactory;
  use SoftDeletes;
  use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
 'name',
 'email',
 'password',
 'date_of_birth',
 'place_of_birth',
 'place_of_domicile',
 'residence',
    ];
    protected $dates = ['deleted_at'];





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAgeAttribute()
{
    return Carbon::parse($this->attributes['date_of_birth'])->age;
}

public function getAge(){
  $this->birthdate->diff(Carbon::now())
      ->format('%y years, %m months and %d days');
}
public function profile()
{
  return $this->hasOne('Profile');
}
}
