<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoadmapItem extends Model
{
    protected $fillable = [
        'project_id',
        'position',
        'is_currently_step',
        'description',
        'circle_size',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
