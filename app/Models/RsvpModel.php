<?php

namespace App\Models;

use CodeIgniter\Model;


class RsvpModel extends Model
{
    protected $table      = 'rsvp';
    protected $primaryKey = 'id_tamu';
    protected $useTimestamps = 'true';

    protected $allowFields = ['nama_tamu', 'jumlah_tamu', 'kehadiran', 'ket_tdkhadir'];

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilRsvp($id_tamu = false)
    {
        if ($id_tamu === false) {
            return $this->db->table('rsvp')->orderBy('id_tamu', 'DESC')->get();   //mengambil data objek type
        } else {
            return $this->Where(['id_tamu' => $id_tamu])->get();
        }
    }

    // fungsi add data ke database
    function send_konfirmasi($send_konfirmasi)
    {
        return $this->db->table('rsvp')->insert($send_konfirmasi);
    }

    public function updateRsvp($data, $id_tamu)
    {
        return $this->db->table('rsvp')->update($data, ['id_tamu' => $id_tamu]);
    }
}
