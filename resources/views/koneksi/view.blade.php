@extends('layouts.app')

@section('title')
  idREN Koneksi
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-3">
        <h1 class="text-danger mb-5" style="font-size: 5em">Permintaan Koneksi idREN</h1>
        <h2>Data User Peminta</h2>
        <div class="form-group">
          <label class="form-label">Instansi</label>
          <label class="form-control">{{$user->instansi}}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama</label>
          <label class="form-control">{{$user->name}}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Username</label>
          <label class="form-control">{{$user->username}}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Phone Number</label>
          <label class="form-control">{{$user->phone_number}}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Peran</label>
          <label class="form-control">{{$user->peran}}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Email</label>
          <label class="form-control">{{$user->email}}</label>
        </div>

        <h2>Data Koneksi</h2>
        <div class="form-group">
          <label class="form-label">Nama Unit Pengelola IT / Jaringan</label>
          <label class="form-control">{{$koneksi->nama_unit_pengelola_jaringan}}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama Kepala Unit</label>
          <label class="form-control">{{ $koneksi->nama_kepala_unit }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Email</label>
          <label class="form-control">{{ $koneksi->email }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nomer HP</label>
          <label class="form-control">{{ $koneksi->nomer_hp }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama Penanggung Jawab Jaringan</label>
          <label class="form-control">{{ $koneksi->nama_penanggung_jawab_jaringan }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nomor ASN atas nama institusi (optional)</label>
          <label class="form-control">{{ $koneksi->nomor_asn }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Blok alamat IP atas nama institusi (optional)</label>
          <label class="form-control">{{ $koneksi->alamat_ip }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama Penyedia Jasa Internet (1)</label>
          <label class="form-control">{{ $koneksi->nama_penyedia_jasa_internet }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama PIC/account manager</label>
          <label class="form-control">{{ $koneksi->nama_pic }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nomor HP PIC/account manager</label>
          <label class="form-control">{{ $koneksi->nomor_hp_pic }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Besar bandwidth internet yang dilanggan</label>
          <label class="form-control">{{ $koneksi->bandwidth_internet }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama Penyedia Jasa Internet (2, jika ada)</label>
          <label class="form-control">{{ $koneksi->nama_penyedia_jasa_internet_2 }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nama PIC/account manager</label>
          <label class="form-control">{{ $koneksi->nama_pic_2 }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Nomor HP PIC/account manager</label>
          <label class="form-control">{{ $koneksi->nomor_hp_pic_2 }}</label>
        </div>
        <div class="form-group">
          <label class="form-label">Besar bandwidth internet yang dilanggan</label>
          <label class="form-control">{{ $koneksi->bandwidth_internet_2 }}</label>
        </div>
        <div class="form-group">
          <form method="POST" action="{{ route('koneksi.download') }}">
            @csrf
            <input type="text" name="filename" value="{{$user->instansi.' - '.$user->name}}" hidden>
            <input type="text" name="file" value="{{$koneksi->file_path}}" hidden>
            <button type="submit" class="custom-file-label::after">Download File</button>
          </form>
        </div>
        <div class="form-inline">
          <form method="POST" action="{{ route('koneksi.accept') }}">
            @csrf
            <input type="text" name="id" value="{{$koneksi->id}}" hidden>
            <button type="submit" class="btn btn-primary">Verify Koneksi</button>
          </form>
          <form method="POST" action="{{ route('koneksi.delete') }}">
            @csrf
            <input type="text" name="id" value="{{ $koneksi->id }}" hidden>
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>

      </div>
      <div class="col-md-5" style="background-color:#F9D9EB">
        <h1 class="text mb-5" style="font-size: 3em">Flowchart Pengajuan Koneksi</h1>
        <img src="{{ asset('assets/img/flowchart-con-req.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>
@endsection