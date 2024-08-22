<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'transaksi_id';
    protected $allowedFields    = ['nama', 'email', 'tanggal', 'nomor_hp', 'alamat', 'kat_id', 'status_pesanan'];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getTransaksiWithKatalog()
    {
        return $this->select('transaksi.*, katalog.nama_katalog, katalog.harga')
            ->join('katalog', 'transaksi.kat_id = katalog.katalog_id')
            ->orderBy('status_pesanan', 'ASC')
            ->findAll();
    }

    public function getTransaksiWithKeyword($keyword = null)
    {
        if ($keyword !== null && $keyword !== '') {
            return $this->select('transaksi.*, katalog.nama_katalog, katalog.harga')
                ->join('katalog', 'transaksi.kat_id = katalog.katalog_id')
                ->like('email', $keyword)
                ->findAll();
        } else {
            return [];
        }
    }
}
