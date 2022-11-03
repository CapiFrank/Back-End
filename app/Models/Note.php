<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'notes';
    protected $fillable = [
              'text',
    ];
  
  public function task(){
    return $this->hasMany(Task::class);
  }

  
  
}
