<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    use HasFactory;

    public function contactForms() {
        return $this->hasMany(ContactForm::class);
    }
}
