<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function mahasiswa(){
        $data = ['title'=> 'Mahasiswa',
                 'img'  => 'https://cdn.britannica.com/26/162626-050-3534626F/Koala.jpg',
                 'data' =>['nama'   => 'Rani fatah',
                           'umur'   => 20,
                           'jk'     => 'P',
                           'tempat' => 'Palembang',
                           'tanggal'=> '22-01-2000',
                           'no'     => '081234567890']];
        return view('mahasiswa.profil',$data);
    }
    public function dosen(){
        $data = ['title'=> 'Dosen',
                 'img'  => 'https://akcdn.detik.net.id/community/media/visual/2020/01/16/488a74bf-8e46-433c-af7e-3abbc8a128f3.jpeg?w=750&q=90',
                 'data' =>['nama'   => 'Rafael San',
                           'umur'   => 40,
                           'jk'     => 'L',
                           'tempat' => 'Jakarta',
                           'tanggal'=> '03-02-1980',
                           'no'     => '081209876543']];
        return view('dosen.profil',$data);
    }
}
