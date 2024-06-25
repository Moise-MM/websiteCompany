<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    public function contactSection() {
        return $this->belongsTo(ContactSection::class);
    }
}
