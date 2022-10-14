<?php

namespace App\Models;

use CodeIgniter\Model;


class NoteModel extends Model
{
    protected $table      = 'notes';
    protected $primaryKey = 'id_note';
    protected $useTimestamps = 'true';


    protected $allowFields = ['judul_note', 'isi_note', 'created_at', 'updated_at'];

    function __construct()
    {
        $this->db = db_connect();
    }

    function callNote($id_note = false)
    {
        if ($id_note === false) {
            return $this->db->table('notes')->get();
        } else {
            return $this->Where(['id_note' => $id_note])->get()->getRow();
        }
    }

    function addNote($addNote)
    {
        return $this->db->table('notes')->insert($addNote);
    }

    public function updateNote($data, $id_note)
    {
        return $this->db->table('notes')->update($data, ['id_note' => $id_note]);
    }
}
