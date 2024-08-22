<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\Setting;
use App\Models\Transaksi;

class Home extends BaseController
{
    protected $katalog;
    protected $setting;
    protected $transaksi;

    public function __construct()
    {
        $this->katalog = new Katalog();
        $this->setting = new Setting();
        $this->transaksi = new Transaksi();
    }

    public function index()
    {
        if (session()->has('id')) {
            return redirect()->route('beranda');
        }

        $katalog = $this->katalog->where('status', 'p')->findAll();
        $setting = $this->setting->find(1);
        $data['katalog'] = $katalog;
        $data['setting'] = $setting;

        return view('landing_page', $data);
    }

    public function cek()
    {
        $keyword = $this->request->getVar('keyword');
        $transaksi = [];

        if ($keyword !== null && $keyword !== '') {
            $transaksi = $this->transaksi->getTransaksiWithKeyword($keyword);
            if (empty($transaksi)) {
                session()->setFlashdata('jenis', 'warning');
                session()->setFlashdata('pesan1', 'Not Found!');
                session()->setFlashdata('pesan2', 'Email tidak ditemukan');
            }
        }

        $data = [
            'setting' => $this->setting->find(1),
            'keyword' => $keyword,
            'transaksi' => $transaksi,
        ];

        return view('cek_pesanan', $data);
    }
}
