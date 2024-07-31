<?php

namespace App\Models;

use CodeIgniter\Model;

class Katalog extends Model
{
    protected $table            = 'katalog';
    protected $primaryKey       = 'katalog_id';
    protected $allowedFields    = ['nama_katalog', 'deskripsi', 'harga', 'gambar', 'status'];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
