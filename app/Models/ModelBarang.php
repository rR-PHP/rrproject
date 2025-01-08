<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{
    protected $table = 'tb_matkul';
    protected $primaryKey = 'id'; // Sesuaikan dengan primary key tabel Anda
    protected $returnType = 'object'; // 'object' untuk mengembalikan data sebagai objek
}