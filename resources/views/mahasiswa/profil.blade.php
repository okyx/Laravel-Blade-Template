@extends('layouts.app')
@php
    $title = 'Mahasiswa';
    $img   = "https://cdn.britannica.com/26/162626-050-3534626F/Koala.jpg";
    $data  = ['nama'   =>'Rani fatahma',
              'umur'   => 20,
              'jk'     =>'P',
              'tempat' =>'Palembang',
              'tanggal'=>'22-01-2000',
              'no'     =>'081234567890',
              'jurusan'=>'Sistem Informasi'];
@endphp
@section('profil',$title)
@section('img',$img)
@section('leftbar')
    @parent
    <div class="row">
        <div class="col"><i class="fa fa-graduation-cap"></i> Nilai</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col"><i class="fa fa-tasks"></i> Submit Tugas</div>
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
    @elseif($key=="jurusan")
        @section('data')
        <div class="form-group row my-0">
            <label class="col-4 col-form-label">Jurusan</label>
            <label class="col col-form-label">: {{$val}}</label>
        </div>
        @endsection
    @else 
        @section($key,$val)
    @endif
@endforeach