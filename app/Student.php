<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sequence;
class Student extends Model
{
  protected $fillable = ['code', 'fullname', 'birthdate', 'is_active'];

  public function studentSubjectYears(){
    return $this->hasMany('App\StudentSubjectYear');
  }

  public static function create(array $attributes=[]){
    
    $model = static::query()->create($attributes);
    return $model;

  }
}
