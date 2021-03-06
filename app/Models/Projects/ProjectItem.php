<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectItem extends Model
{
    use SoftDeletes;
    
    protected $table = 'project_items';
}
