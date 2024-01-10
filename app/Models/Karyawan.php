<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $primaryKey = 'karyawan_id';
    protected $fillable = ['nama_karyawan', 'jabatan', 'gaji', 'foto'];

}