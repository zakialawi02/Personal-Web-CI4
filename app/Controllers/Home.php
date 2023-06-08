<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Home extends BaseController
{
    protected $PesanModel;
    public function __construct()
    {
        $this->pesan = new PesanModel();
    }
    public function index()
    {
        $pesan = new PesanModel();
        $data = [
            'title' => 'Zaki Personal Website',
            'tampilData' => $pesan->tampilData()->getResult()
        ];

        return view('indexHome', $data);
    }

    public function send_message()
    {
        // dd($this->request->getVar());
        $pesan = new PesanModel();

        $data = [
            'pesan' => $this->request->getPost('pesan'),
            'pesan_dari' => $this->request->getPost('pesan_dari'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $send_message = $this->pesan->send_message($data);

        if ($send_message) {
            session()->setFlashdata('alert', 'Pesan telah terkirim. 🚀');
            return redirect()->to(base_url());
        }
    }

    public function coba()
    {
        $data = [
            'title' => 'Zaki Personal Website'
        ];

        return view('coba', $data);
    }

    public function SUS()
    {
        $data = [
            'title' => 'Zaki Personal Website'
        ];

        return view('SUS', $data);
    }
}
