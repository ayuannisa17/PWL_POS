<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';          // nama tabel di database
    protected $primaryKey = 'id';    // primary key

    protected $fillable = [
        'level_kode',
        'level_nama'
    ];
}
