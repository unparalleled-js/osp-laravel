<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectMeta extends Model
{
    protected $fillable = [
        'project_id',
        'likes',
        'views',
        'bookmarks',
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
