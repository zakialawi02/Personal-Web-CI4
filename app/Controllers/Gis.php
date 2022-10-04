<?php

namespace App\Controllers;

class Gis extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'GIS MAP'
        ];

        return view('leaflet/dashboard', $data);
    }
}
