<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvalidWord extends Model
{
    use HasFactory;

    protected $table = 'invalid_words';

    protected $fillable = [
        'word'
    ];
}
