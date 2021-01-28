<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    // PrimaryKey
    protected $primaryKey = 'id_game';

    // Proteger campos
    protected $guarded = ['id_game', 'created_at','updated_at'];
}
