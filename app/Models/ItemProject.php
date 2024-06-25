<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemProject extends Model
{
    use HasFactory;

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function projectImages() {
        return $this->hasMany(ProjectImage::class);
    }
}
