<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'email',
        'description',
        'logo',
        'address',
        'phone',
        'twitter',
        'facebook',
        'skype',
        'linkedin',
        'youtube',
        'lat',
        'lng'
    ];
}
