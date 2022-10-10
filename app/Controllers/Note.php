<?php

namespace App\Controllers;

use App\Models\NoteModel;

class Note extends BaseController
{
    protected $NoteModel;
    public function __construct()
    {
        $this->notes = new NoteModel();
    }

    public function index()
    {
        // $rsvp = new NoteModel();
        $data = [
            'title' => 'Notes',
            'title1' => 'Notes',
            // 'tampilRsvp' => $rsvp->tampilRsvp()->getResult()
        ];
        return view('Notes/notes', $data);
    }
}
