<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectArtist extends Model
{
    use SoftDeletes;
    
    protected $table = 'project_artists';
}
