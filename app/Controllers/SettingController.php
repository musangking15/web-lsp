<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Setting;
use CodeIgniter\HTTP\ResponseInterface;

class SettingController extends BaseController
{

    protected $setting;

    public function __construct()
    {
        $this->setting = new Setting();
    }

    public function index()
    {
        $change = $this->setting->find(1);

        $data['setting'] = $change;

        return view('admin/setting', $data);
    }

    public function ubah()
    {
        $input = $this->request->getVar();

        $key = $this->setting->find(1);

        $validationRules = [
            'email' => 'valid_email',
        ];

        if (!$validationRules) {
            return redirect()->route('setting');
        }

        $setting_id = $input['setting_id'];
        $email = $input['email'];
        $phone = $input['phone'];
        $alamat = $input['alamat'];

        $data = [
            'email' => $email,
            'phone' => $phone,
            'alamat' => $alamat,
        ];

        if ($this->request->getFile('logo')->isValid() && !$this->request->getFile('logo')->hasMoved()) {
            $validationRules['logo'] = 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]';
            $logo = $this->request->getFile('logo');
            unlink('logo/' . $key['logo']);
            if ($logo->isValid() && !$logo->hasMoved()) {
                $newName = $logo->getRandomName();
                $logo->move('logo', $newName);
                $data['logo'] = $newName;
            }
        } else {
            $data['logo'] = $key['logo'];
        }

        $update = $this->setting->update($setting_id, $data);

        if ($update) {
            return redirect()->route('beranda');
        } else {
            return redirect()->route('setting');
        }
    }
}
