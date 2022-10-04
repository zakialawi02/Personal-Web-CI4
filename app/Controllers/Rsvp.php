<?php

namespace App\Controllers;

use App\Models\RsvpModel;

class Rsvp extends BaseController
{
    protected $RsvpModel;
    public function __construct()
    {
        $this->rsvp = new RsvpModel();
    }

    public function index()
    {
        $rsvp = new RsvpModel();
        $data = [
            'title' => 'RSVP',
            'title1' => 'RSVP',
            'tampilRsvp' => $rsvp->tampilRsvp()->getResult()
        ];
        return view('rsvp', $data);
    }

    public function send_konfirmasi()
    {
        // dd($this->request->getVar());
        $pesan = new RsvpModel();

        $data = [
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'jumlah_tamu' => $this->request->getPost('jumlah_tamu'),
            'kehadiran' => $this->request->getPost('kehadiran'),
            'ket_tdkhadir' => $this->request->getPost('keterangan'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $send_konfirmasi = $this->rsvp->send_konfirmasi($data);

        if ($send_konfirmasi) {
            session()->setFlashdata('alert', 'Konfirmasi Anda Telah Dikirimkan.');
            return redirect()->to(base_url('rsvp'));
        }
    }


    public function hapus($id_tamu)
    {
        $this->rsvp->delete($id_tamu);
        session()->setFlashdata('alert', 'Data Berhasil dihapus.');
        return redirect()->to(base_url('rsvp'));
    }
}
