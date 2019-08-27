<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = ['code', 'name', 'is_active'];

  public function subjectYears(){
    return $this->hasMany('App\SubjectYear');
  }
}
