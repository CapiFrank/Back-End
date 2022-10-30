<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;
    protected $table = 'checklists';
    protected $primaryKey = 'id';
    protected $fillable = [
              'name',
              'completed_tasks',
              'total_tasks',
              'id_checklist_group'
    ];

  public function checklist_groups(){
    return $this->belongsTo(ChecklistGroup::class, 'id_checklist_group');
  }

  public function task(){
    return $this->hasMany(Task::class);
  }
}
