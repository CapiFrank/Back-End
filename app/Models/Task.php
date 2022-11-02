<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
           'my_day',
           'important',
           'contents',
           'title',
           'final_date',
           'note_id',
           'label_id',
           'checklist_id',
           'user_id',
    ];
  public function user(){
    return $this->belongsTo(User::class, 'user_id');
  }
  public function checklist(){
    return $this->belongsTo(Checklist::class, 'checklist_id');
  }
  public function label(){
    return $this->hasOne(Label::class, 'label_id');
  }
  public function note(){
    return $this->hasOne(Note::class, 'note_id');
  }
  /*Comentario*/
}
