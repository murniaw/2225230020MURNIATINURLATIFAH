<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sing extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nim',
        'jurusan',
        'motivasi',
    ];
}
