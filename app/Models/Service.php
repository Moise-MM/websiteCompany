<?php

namespace App\Models;

use App\Models\ItemService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    public function itemServices() {
        return $this->hasMany(ItemService::class);
    }
}
