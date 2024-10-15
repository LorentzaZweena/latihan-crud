<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smk extends Model
{
    use HasFactory;
    protected $fillable = [
        'jurusan', 'deskripsi', 'foto'
    ];
}
