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

    public function category()
    {
        return $this->belongsTo('App\Models\ProjectCategory', 'category_id');
    }

    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark', 'project_id');
    }

    public function project_meta() {
        return $this->hasOne('App\Models\ProjectMeta', 'project_id');
    }
}
