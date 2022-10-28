<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
           'username',
           'password',
           'first_name',
           'second_name',
           'first_surname',
           'second_surname',
           'email',
           'role_id',
           'first_time',
    ];
  public function role(){
    return $this->hasOne(Role::class, 'role_id');
  }
  protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
