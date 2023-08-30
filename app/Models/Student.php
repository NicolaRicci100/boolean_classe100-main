<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

  use HasFactory;
  use SoftDeletes;

  public function getFullName()
  {
    return $this->first_name . ' ' . $this->last_name;
  }

  protected $fillable = ['first_name', 'last_name', 'age'];
}
