<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    // Nama tabel yang dipakai
    protected $table = 'employes';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi data
    protected $fillable = ['id', 'nama', 'alamat', 'gender', 'gaji'];
}
