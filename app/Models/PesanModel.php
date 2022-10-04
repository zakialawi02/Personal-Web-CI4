<?php

namespace App\Models;

use CodeIgniter\Model;


class PesanModel extends Model
{
    protected $table      = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $useTimestamps = 'true';

    protected $allowFields = ['pesan', 'pesan_dari'];

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilData()
    {
        return $this->db->table('pesan')->get();   //mengambil data objek type
    }
    // fungsi add data ke database
    function send_message($send_message)
    {
        return $this->db->table('pesan')->insert($send_message);
    }
}
