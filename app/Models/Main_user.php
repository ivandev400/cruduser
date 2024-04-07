<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Разделители в названиях классах пишутся без нижних подчеркиваний - MainUser
class Main_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}
