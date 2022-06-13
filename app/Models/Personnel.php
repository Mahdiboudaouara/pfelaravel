<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'mobile',
        'email',
        'role',
        'description',
        'departement',
        'password',
    ];

}
