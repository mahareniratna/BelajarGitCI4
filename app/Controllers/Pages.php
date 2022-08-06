<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming',
            'test' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Web Programming'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jln. xxx No.00',
                    'kota' => 'Kuningan'
                ],
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Lingk. Puhun',
                    'kota' => 'Kuningan'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
