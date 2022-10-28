<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChecklistGroup extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'checklist_groups';
    protected $fillable = [
              'name',
    ];

  public function checklist(){
    return $this->hasMany(Checklist::class);
  }
}
