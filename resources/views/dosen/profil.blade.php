@extends('layouts.app')
@php
    $title = "Dosen";
    $img   = "https://akcdn.detik.net.id/community/media/visual/2020/01/16/488a74bf-8e46-433c-af7e-3abbc8a128f3.jpeg?w=750&q=90";
    $data  = ['nama'   =>'John Doe',
              'umur'   => 40,
              'jk'     =>'L',
              'tempat' =>'Jakarta',
              'tanggal'=>'03-02-1980',
              'no'     =>'081209876543'];
@endphp
@section('profil',$title)
@section('img',$img)
@section('leftbar')
    @parent
    <div class="row">
        <div class="col"><i class="fa fa-graduation-cap"></i> Input Nilai Mahasiswa</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col"><i class="fa fa-tasks"></i> Input Tugas</div>
    </div>
    <hr/>
@endsection
@foreach($data as $key=>$val)
    @if($key=="jk")
        @if($val=="L")
            @section($key,"Laki - Laki")
        @else
            @section($key,"Perempuan")
        @endif
    @else 
        @section($key,$val)
    @endif
@endforeach