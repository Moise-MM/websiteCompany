<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;


    public function itemProject() {
        return $this->belongsTo(ItemProject::class);
    }

    
}
