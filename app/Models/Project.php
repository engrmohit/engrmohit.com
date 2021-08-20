<?php

namespace App\Models;

class Project extends BaseModel
{

    ///////////////////////////////////////////////////
    // RELATIONS
    ///////////////////////////////////////////////////
    
    public function links()
    {
        return $this->hasMany(ProjectLink::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(technology::class);
    }
}
