<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        
        $user = [
            'nama' => 'Faiz Syafiq Nabily',
            'email' => 'faiz@example.com',
            'telepon' => '081234567890',
            'tanggal_lahir' => '2003-06-15',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Merdeka No. 45, Bandung',
            'foto' => 'faiz.jpg'
        ];

        return view('editProfil', compact('user'));
    }

    public function update(Request $request)
    {
        // Sementara belum pakai database, hanya tampilkan pesan sukses
        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
