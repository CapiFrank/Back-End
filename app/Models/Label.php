<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'labels';
    protected $fillable = [
              'text',
    ];

  public function task(){
    return $this->hasMany(Task::class);
  }
}
