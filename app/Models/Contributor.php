<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $fillable = ['project_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
