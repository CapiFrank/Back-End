<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $foreingKey = 'note_id';
    protected $foreingKey = 'label_id';
    protected $foreingKey = 'checklist_id';
    protected $table = 'tasks';
    protected $fillable = [
            'my_day',
           'important',
           'contents',
           'final_date',
           'note_id',
            'label_id',
           'checklist_id',
    ];

  public function checklist(){
    return $this->belongsTo(Checklist:class, 'checklist_id');
  }
  public function label(){
    return $this->belongsTo(Label:class, 'label_id');
  }
  public function note(){
    return $this->belongsTo(Note::class, 'note_id');
  }
}
