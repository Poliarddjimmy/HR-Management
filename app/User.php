<?php

namespace HrManagement;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'user_code', 'user_add', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function department()
    {
        return $this->hasMany('HrManagement\department');
    }
    
    public function position()
    {
        return $this->hasMany('HrManagement\position');
    }

    public function dept()
    {
        return $this->hasOneThrough('HrManagement\department', 'HrManagement\division');
    }
    
    public function division()
    {
        return $this->belongsTo('HrManagement\division');
    }
}
