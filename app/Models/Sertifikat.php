<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $table = 'sertifikats'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['judul', 'nama', 'tanggal', 'jenis_course'];
}
