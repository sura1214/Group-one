<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud extends Model
{
    use HasFactory;
    public$timestamps=false;
    protected $fillable = [
        'first-name',
        'last-name',
        'sex',
        'e-mail',
        'phone',
    ];
}
