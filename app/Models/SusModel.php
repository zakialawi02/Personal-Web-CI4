<?php

namespace App\Models;

use CodeIgniter\Model;


class SusModel extends Model
{
    protected $table      = 'qsus';
    protected $primaryKey = 'id';
    protected $useTimestamps = 'true';


    protected $allowFields = ['keerangan', 'gambar', 'created_at'];

    function __construct()
    {
        $this->db = db_connect();
    }

    function getSus($id = false)
    {
        if ($id === false) {
            return $this->db->table('qsus')->get();
        } else {
            return $this->Where(['id' => $id])->get();
        }
    }

    function addReport($addReport)
    {
        return $this->db->table('qsus')->insert($addReport);
    }
}
