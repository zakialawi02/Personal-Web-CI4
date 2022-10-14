<?php

namespace App\Controllers;

use App\Models\NoteModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Note extends BaseController
{
    protected $NoteModel;
    public function __construct()
    {
        $this->note = new NoteModel();
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
        $note = new NoteModel();

        $data = [
            'title' => 'Notes',
            'title1' => 'Notes',
            'callNote' => $note->callNote()->getResultArray(),
        ];
        return view('notes/notes', $data);
    }

    // view detail data
    public function detail($id_note)
    {
        $note = new NoteModel();
        $data = [
            'title' => 'Edit Notes',
            'callNote' => $note->callNote($id_note)->getRow(),
        ];

        if (!$data['callNote']) {
            throw PageNotFoundException::forPageNotFound();
        }
        // dd($data);
        return view('notes/detailNote', $data);
    }

    // insert data
    public function create()
    {
        $data = [
            'title' => 'New Notes',
            'title1' => 'New Notes',
        ];
        return view('notes/createNote', $data);
    }

    // insert data
    public function addNote()
    {
        // dd($this->request->getVar());
        $note = new NoteModel();
        $data = [
            'judul_note' => $this->request->getVar('judulNote'),
            'isi_note'  => $this->request->getVar('isiNote'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $addNote = $this->note->addNote($data);

        if ($addNote) {
            session()->setFlashdata('alert', 'Note Anda Berhasil Ditambahkan.');
            return $this->response->redirect(site_url('/note'));
        }
    }

    // edit data
    public function edit($id_note)
    {
        $note = new NoteModel();
        $data = [
            'title' => 'Edit Notes',
            'updateNote' => $note->callNote($id_note)->getRow(),
        ];
        return view('notes/updateNote', $data);
    }

    // update data
    public function update()
    {
        $note = new NoteModel();
        $id = $this->request->getPost('idNote');
        if ($this->request->getMethod() == 'post') {
            $data = [
                'judul_note' => $this->request->getPost('judulNote'),
                'isi_note'  => $this->request->getPost('isiNote'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        $note->updateNote($data, $id);
        session()->setFlashdata('alert', 'Note Berhasil Diubah.');
        return $this->response->redirect(site_url('/note'));
    }

    // delete data
    public function delete($id_note)
    {
        $note = new NoteModel();
        // if (isset($callNote)) {
        //     $note->delete(['id_note' => $id_note]);
        //     session()->setFlashdata('alert', 'Note Berhasil dihapus.');
        //     return $this->response->redirect(site_url('/note'));
        // } else {
        //     session()->setFlashdata('alert', "Hapus Gagal !, ID '.$id_note.' Tidak ditemukan");
        //     return redirect('/note');
        // }

        $note->delete(['id_note' => $id_note]);
        session()->setFlashdata('alert', "Note Berhasil dihapus.");
        return $this->response->redirect(site_url('/note'));
    }
}
