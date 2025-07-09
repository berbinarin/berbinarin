<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerbinarForUController extends Controller
{
    public function index()
    {
        // Data dummy 
        $BerbinarForUData = [
            (object)[
                'id' => 1,
                'nama' => 'Contoh Nama',
                'email' => 'dasasd@mgg.com',
                'jadwal_tanggal' => now(),
                'jadwal_pukul' => '10:00',
                'created_at' => now(),
                'metode' => 'online',
                'daerah' => 'Online',
                'harga' => 100000,
                'no_wa' => '6281234567890',
            ],
        ];

        return view('dashboard.counseling-pm.berbinar-for-u.index', compact('BerbinarForUData'));
    }

    public function show($id)
    {
        // Data dummy detail
        $item = (object)[
            'id' => $id,
            'nama' => 'Contoh Nama',
            'jadwal_tanggal' => now(),
            'jadwal_pukul' => '10:00',
            'created_at' => now(),
            'metode' => 'online',
            'daerah' => 'Online',
            'harga' => 100000,
            'no_wa' => '6281234567890',
        ];

        return view('dashboard.counseling-pm.berbinar-for-u.show', compact('item'));
    }

    public function create()
    {
        return view('dashboard.counseling-pm.berbinar-for-u.create');
    }


    public function edit($id)
    {
        // Data dummy
        $item = (object)[
            'id' => $id,
            'nama' => '',
            'no_wa' => '',
            'email' => '',
            'jenis_kelamin' => '',
            'tanggal_lahir' => '',
            'status_pernikahan' => '',
            'kota' => '',
            'alamat' => '',
            'agama' => '',
            'suku' => '',
            'posisi_anak' => '',
            'hobi' => '',
            'pendidikan_terakhir' => '',
            'asal_sekolah' => '',
            'pekerjaan' => '',
            'kegiatan_sosial' => '',
            'cerita' => '',
        ];

        return view('dashboard.counseling-pm.berbinar-for-u.edit', compact('item'));
    }
}