<?php

namespace App\Controllers;

use App\Models\PesanModel;
use App\Models\SusModel;

class Home extends BaseController
{
    protected $PesanModel;
    protected $SusModel;
    public function __construct()
    {
        $this->pesan = new PesanModel();
        $this->sus = new SusModel();
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
            'title' => 'SUS Questionnaire'
        ];

        return view('SUS', $data);
    }

    public function addReport()
    {
        // Mengambil data yang diinput dari form
        $email = $this->request->getPost('email');
        $keterangan = $this->request->getPost('keterangan');
        $fotoFiles = $this->request->getFiles('foto');

        $gambar = [];

        if ($fotoFiles) {
            foreach ($fotoFiles as $foto) {
                foreach ($foto as $file) {
                    if ($file->isValid()) {
                        $newName = $file->getRandomName();
                        $file->move('img/sus/', $newName);
                        $gambar[] = $newName;
                    }
                }
            }
        }

        $data = [
            'email' => $email,
            'keterangan' => $keterangan,
            'gambar' => implode(', ', $gambar), // Menggabungkan array gambar menjadi string dipisahkan dengan koma
        ];

        $this->sus->addReport($data);

        return redirect()->to('/SUS-Questionnaire');
    }

    public function getsus()
    {
        $data = [
            'title' => 'Data SUS Questionnaire',
            'kuisioner' => $this->sus->getSus()->getResult(),
        ];

        return view('dataSus', $data);
    }
}
