<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;
use App\Models\Transaksi;
use CodeIgniter\HTTP\ResponseInterface;

class TransaksiController extends BaseController
{
    protected $transaksi;
    protected $katalog;

    public function __construct()
    {
        $this->transaksi = new Transaksi();
        $this->katalog = new Katalog();
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksi->where('status_pesanan', 1)->orWhere('status_pesanan', 3)->getTransaksiWithKatalog();

        return view('admin/transaksi', $data);
    }

    public function pesan()
    {
        $pesanan = $this->request->getVar();

        $row = $this->katalog->where('katalog_id', $pesanan['kat_id'])->first();

        $isi = $row['nama_katalog'];

        $data = [
            'nama' => $pesanan['nama'],
            'email' => $pesanan['email'],
            'nomor_hp' => $pesanan['nomor_hp'],
            'tanggal' => $pesanan['tanggal'],
            'alamat' => $pesanan['alamat'],
            'kat_id' => $pesanan['kat_id'],
            'status_pesanan' => 1
        ];

        $message = "
        <p>Data pesanan :</p>
            <ol>
                <li>
                    <p>Nama : " . $pesanan['nama']  . "</p>
                </li>
                <li>
                    <p>Email : " . $pesanan['email'] . "</p>
                </li>
                <li>
                    <p>Paket : " . $isi . "</p>
                </li>
                <li>
                    <p>Tanggal : " . $pesanan['tanggal'] . "</p>
                </li>
                <li>
                    <p>Alamat : " . $pesanan['alamat'] . "</p>
                </li>
            </ol>
        ";

        $email = service('email');
        $email->setFrom($pesanan['email']);
        $email->setTo('jewepe@gmail.com');
        $email->setSubject('Pesanan Paket WO');
        $email->setMessage($message);

        $order = $this->transaksi->insert($data);

        if ($order) {
            $email->send();
            session()->setFlashdata('jenis', 'success');
            session()->setFlashdata('pesan1', 'Berhasil Booking!');
            session()->setFlashdata('pesan2', 'Data anda sudah dikirim, silahkan tunggu konfirmasi dari kami');
            return redirect()->back();
        } else {
            session()->setFlashdata('jenis', 'error');
            session()->setFlashdata('pesan1', 'Gagal Booking!');
            session()->setFlashdata('pesan2', 'Terdapat kesalahan dalam input pesanan');
            return redirect()->back();
        }
    }

    public function terima($id)
    {
        $row = $this->transaksi->find($id);

        $katalog = $this->katalog->where('katalog_id', $row['kat_id'])->first();

        $isi = $katalog['nama_katalog'];

        $message = "
        <p>Konfirmasi pesanan :</p>
            <ol>
                <li>
                    <p>Nama : " . $row['nama']  . "</p>
                </li>
                <li>
                    <p>Email : " . $row['email'] . "</p>
                </li>
                <li>
                    <p>Paket : " . $isi . "</p>
                </li>
                <li>
                    <p>Tanggal : " . $row['tanggal'] . "</p>
                </li>
                <li>
                    <p>Status : Diterima</p>
                </li>
            </ol>
        ";

        $data = [
            'status_pesanan' => 2
        ];

        $email = service('email');
        $email->setFrom('jewepe@gmail.com');
        $email->setTo($row['email']);
        $email->setSubject('Pemberitahuan Konfirmasi Pesanan');
        $email->setMessage($message);

        $update = $this->transaksi->update($id, $data);

        if ($update) {
            $email->send();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function tolak($id)
    {
        $row = $this->transaksi->find($id);

        $katalog = $this->katalog->where('katalog_id', $row['kat_id'])->first();

        $isi = $katalog['nama_katalog'];

        $message = "
        <p>Konfirmasi pesanan :</p>
            <ol>
                <li>
                    <p>Nama : " . $row['nama']  . "</p>
                </li>
                <li>
                    <p>Email : " . $row['email'] . "</p>
                </li>
                <li>
                    <p>Paket : " . $isi . "</p>
                </li>
                <li>
                    <p>Tanggal : " . $row['tanggal'] . "</p>
                </li>
                <li>
                    <p>Status : Ditolak</p>
                </li>
            </ol>
        ";

        $data = [
            'status_pesanan' => 3
        ];

        $email = service('email');
        $email->setFrom('jewepe@gmail.com');
        $email->setTo($row['email']);
        $email->setSubject('Pemberitahuan Konfirmasi Pesanan');
        $email->setMessage($message);


        $update = $this->transaksi->update($id, $data);

        if ($update) {
            $email->send();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function hapus($id)
    {
        $transaksi = $this->transaksi->find($id);

        if (!$transaksi) {
            return redirect()->back();
        }

        $this->transaksi->delete($id);

        return redirect()->back();
    }

    public function laporan()
    {
        $data['transaksi'] = $this->transaksi->where('status_pesanan', 2)->getTransaksiWithKatalog();

        return view('admin/laporan', $data);
    }
}
