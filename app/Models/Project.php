<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'owner_id',
        'name',
        'location',
        'web_site',
        'short_description',
        'description',
        'license_type',
        'tags',
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function roadmap_items()
    {
        return $this->hasMany('App\Models\RoadmapItem', 'project_id');
    }

    public function vacancies()
    {
        return $this->hasMany('App\Models\Vacancy', 'project_id');
    }
}
