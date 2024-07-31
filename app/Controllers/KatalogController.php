<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Katalog;
use CodeIgniter\HTTP\ResponseInterface;

class KatalogController extends BaseController
{
    protected $katalog;

    public function __construct()
    {
        $this->katalog = new Katalog();
    }

    public function index()
    {
        $katalog = $this->katalog->findAll();

        $data['katalog'] = $katalog;

        return view('admin/katalog/index', $data);
    }

    public function show()
    {
        return view('admin/katalog/tambah');
    }

    public function add()
    {
        $input = $this->request->getVar();

        if ($input) {

            $validationRules = [
                'nama_katalog' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|numeric',
                'status' => 'required',
                'gambar' => 'uploaded[gambar]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            ];

            if (!$validationRules) {
                return redirect()->route('tambah_katalog');
            }

            $nama_katalog = $input['nama_katalog'];
            $deskripsi = $input['deskripsi'];
            $harga = $input['harga'];
            $status = $input['status'];
            $gambar = $this->request->getFile('gambar');


            if ($gambar->isValid() && !$gambar->hasMoved()) {
                $newName = $gambar->getRandomName();
                $gambar->move('gambar', $newName);
            }

            $data = [
                'nama_katalog' => $nama_katalog,
                'deskripsi' => $deskripsi,
                'harga' => $harga,
                'status' => $status,
                'gambar' => $newName,
            ];

            $add = $this->katalog->insert($data);

            if ($add) {
                return redirect()->route('tampil_katalog');
            } else {
                return redirect()->route('tampil_katalog');
            }
        } else {
            return redirect()->route('tambah_katalog');
        }
    }

    public function edit($id)
    {
        $katalog = $this->katalog->find($id);

        $data['katalog'] = $katalog;

        return view('admin/katalog/edit', $data);
    }

    public function update($id)
    {
        $katalog = $this->katalog->find($id);

        if (!$katalog) {
            return redirect()->route('tampil_katalog');
        }

        $nama_katalog = $this->request->getVar('nama_katalog');
        $deskripsi = $this->request->getVar('deskripsi');
        $harga = $this->request->getVar('harga');
        $status = $this->request->getVar('status');

        $data = [
            'nama_katalog' => $nama_katalog,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'status' => $status,
        ];

        if ($_FILES['gambar']['name'] !== '') {
            $validationRules['gambar'] = 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]';
            $gambar = $this->request->getFile('gambar');
            unlink('gambar/' . $katalog['gambar']);
            if ($gambar->isValid() && !$gambar->hasMoved()) {
                $newName = $gambar->getRandomName();
                $gambar->move('gambar', $newName);
                $data['gambar'] = $newName;
            }
        } else {
            $data['gambar'] = $katalog['gambar'];
        }

        $update = $this->katalog->update($id, $data);

        if ($update) {
            return redirect()->route('tampil_katalog');
        } else {
            return redirect()->route('tampil_katalog');
        }
    }

    public function delete($id)
    {
        $katalog = $this->katalog->find($id);

        if (!$katalog) {
            return redirect()->route('tampil_katalog');
        }

        unlink('gambar/' . $katalog['gambar']);

        $delete = $this->katalog->delete($id);

        if ($delete) {
            return redirect()->route('tampil_katalog');
        } else {
            return redirect()->route('tampil_katalog');
        }
    }
}
