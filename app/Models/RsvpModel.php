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

    function tampilRsvp()
    {
        return $this->db->table('rsvp')->get();   //mengambil data objek type
    }
    // fungsi add data ke database
    function send_konfirmasi($send_konfirmasi)
    {
        return $this->db->table('rsvp')->insert($send_konfirmasi);
    }
}
