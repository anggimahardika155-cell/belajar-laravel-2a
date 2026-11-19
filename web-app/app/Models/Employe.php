<?php
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 

class Employe extends Model
{ 
    // menentukan nama tabel yang digunakan
    protected $table = 'employes'; 
    // menentukan primary key dari tabel
    protected $primaryKey = 'id'; 
    
    // kolom yang diizinkan untuk disimpan secara massal
    protected $fillable = ['nama', 'alamat', 'gender', 'gaji'];
}
