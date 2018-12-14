<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
      'project_id',
      'position',
      'location',
      'remote',
      'salary',
      'equity',
      'job_description',
    ];

    public function project() {
      return $this->belongsTo('App\Models\Project');
    }
}
