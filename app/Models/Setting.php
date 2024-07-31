<?php

namespace App\Models;

use CodeIgniter\Model;

class Setting extends Model
{
    protected $table            = 'setting';
    protected $primaryKey       = 'setting_id';
    protected $allowedFields    = ['alamat', 'logo', 'phone', 'email'];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
