<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id';
    protected $foreingKey = 'role_id';
    protected $table = 'users';
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
  protected $hidden = [
        'password',
        'remember_token',
    ];
  protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  
  public function role(){
    return $this->belongsTo(Role::class);
  }
  
  public function checklistGroup(){
    return $this->hasMany(ChecklistGroup::class);
  }

}
