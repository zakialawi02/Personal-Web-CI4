<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Message extends BaseController
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
            'title' => 'Anonymous Message',
            'title1' => 'Message',
            'tampilData' => $pesan->tampilData()->getResult()
        ];

        return view('pesan/indexPesan', $data);
    }

    public function send()
    {
        $data = [
            'title' => 'Send Message',
            'title1' => 'Management',
        ];

        return view('pesan/isiPesan', $data);
    }



    public function send_message()
    {
        // dd($this->request->getVar());
        $pesan = new PesanModel();

        $data = [
            'pesan' => $this->request->getPost('pesan'),
            'pesan_dari' => $this->request->getPost('pesan_dari'),
            'created_at' => date('Y-m-d')
        ];

        $send_message = $this->pesan->send_message($data);

        if ($send_message) {
            session()->setFlashdata('alert', 'Pesan Berhasil dimasukkan.');
            return redirect()->to(base_url('message'));
        }
    }

    public function hapus($id_pesan)
    {
        $this->pesan->delete($id_pesan);
        session()->setFlashdata('alert', 'Pesan Berhasil dihapus.');
        return redirect()->to(base_url('message'));
    }

    public function ubah($id_pesan)
    {
        $pesan = new PesanModel();
        $id_pesan = $this->request->getPost('id_pesan');
        $data = [
            'pesan' => $this->request->getPost('pesan'),
            'pesan_dari' => $this->request->getPost('pesan_dari'),
            'updated_at' => date('Y-m-d')
        ];
        $pesan->save($data);
    }
}
