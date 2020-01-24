<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function step()
    {
        return $this->hasMany(Step::class);
    }
}
