<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectYear extends Model
{
  protected $fillable = ['subject_id', 'year_id', 'teacher_id'];

  public function year(){
    return $this->belongsTo('App\Year');
  }
  public function teacher(){
    return $this->belongsTo('App\Teacher');
  }
  public function subject(){
    return $this->belongsTo('App\Subject');
  }
  public function studentSubjectYears(){
    return $this->hasMany('App\StudentSubjectYear');
  }
}
