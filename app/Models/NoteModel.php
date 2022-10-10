<?php

namespace App\Models;

use CodeIgniter\Model;


class NoteModel extends Model
{
    protected $table      = 'note';
    protected $primaryKey = 'id_note';
    protected $useTimestamps = 'true';

    protected $allowFields = ['judul_note', 'isi_note'];

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilData()
    {
        return $this->db->table('note')->get();   //mengambil data objek type
    }
    // fungsi add data ke database
    function send_message($send_message)
    {
        return $this->db->table('note')->insert($send_message);
    }
}
