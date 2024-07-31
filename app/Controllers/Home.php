<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\Setting;

class Home extends BaseController
{
    protected $katalog;
    protected $setting;

    public function __construct()
    {
        $this->katalog = new Katalog();
        $this->setting = new Setting();
    }

    public function index()
    {
        if (session()->has('id')) {
            return redirect()->route('beranda');
        }

        $katalog = $this->katalog->findAll();
        $setting = $this->setting->find(1);
        $data['katalog'] = $katalog;
        $data['setting'] = $setting;

        return view('landing_page', $data);
    }
}
