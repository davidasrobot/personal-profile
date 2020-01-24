<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
