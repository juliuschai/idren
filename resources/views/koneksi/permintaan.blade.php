<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Permintaan koneksi idREN</title>

  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/fav/favicon-16x16.png">
  <link rel="manifest" href="assets/icon/fav/site.webmanifest">
  <link rel="mask-icon" href="assets/icon/fav/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#f9f9f9">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-3">
        <h1 class="text-danger mb-5" style="font-size: 5em">Permintaan Koneksi idREN</h1>
        <p>Keanggotan IDREN terbuka bagi institusi pendidikan dan penelitian di Indonesia. Prosedur untuk bergabung ke jaringan IDREN dapat dilihat pada ilustrasi di atas.</p>
        <p>Berikut beberapa persyaratan untuk dapat bergabung dengan layanan IDREN :</p>
        <p>1. Hubungi admin network/unit TIK di institusi Anda untuk memastikan bahwa infrastruktur /perangkat jaringan siap digunakan. Jaringan IDREN dapat digunakan di perangkat/router eksisting.</p>
        <p>2. Memastikan institusi Anda telah menggunakan layanan dedicated internet (baik ASN maupun IP only)</p>
        <p>3. Mengisi surat permohonan bergabung ke IDREN, contoh surat dapat diunduh disini</p>
        <p>4. Setelah memenuhi persyaratan di atas, silahkan konfirmasi ke alamat email :</p>
        <p>hello@idren.id</p>
        <form class="mt-5" method="POST" action="{{ route('koneksi') }}" enctype="multipart/form-data">
          @csrf

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_unit_pengelola_jaringan" placeholder="Nama Unit Pengelola IT / Jaringan" value="{{ old('nama_unit_pengelola_jaringan') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_kepala_unit" placeholder="Nama Kepala Unit" value="{{ old('nama_kepala_unit') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" id="" name="email" placeholder="Email" value="{{ old('email') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nomer_hp" placeholder="Nomer HP" value="{{ old('nomer_hp') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_penanggung_jawab_jaringan" placeholder="Nama Penanggung Jawab Jaringan" value="{{ old('nama_penanggung_jawab_jaringan') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nomor_asn" placeholder="Nomor ASN atas nama institusi (optional)" value="{{ old('nomor_asn') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="alamat_ip" placeholder="Blok alamat IP atas nama institusi (optional)" value="{{ old('alamat_ip') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_penyedia_jasa_internet" placeholder="Nama Penyedia Jasa Internet (1)" value="{{ old('nama_penyedia_jasa_internet') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_pic" placeholder="Nama PIC/account manager" value="{{ old('nama_pic') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nomor_hp_pic" placeholder="Nomor HP PIC/account manager" value="{{ old('nomor_hp_pic') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="bandwidth_internet" placeholder="Besar bandwidth internet yang dilanggan" value="{{ old('bandwidth_internet') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_penyedia_jasa_internet_2" placeholder="Nama Penyedia Jasa Internet (2, jika ada)" value="{{ old('nama_penyedia_jasa_internet_2') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="nama_pic_2" placeholder="Nama PIC/account manager" value="{{ old('nama_pic_2') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="trxt" id="" name="nomor_hp_pic_2" placeholder="Nomor HP PIC/account manager" value="{{ old('nomor_hp_pic_2') }}">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" id="" name="bandwidth_internet_2" placeholder="Besar bandwidth internet yang dilanggan" value="{{ old('bandwidth_internet_2') }}">
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input class="custom-file-input" type="file" id="customFile" name="customFile" onchange="setfilename()">
              <label class="custom-file-label text-muted" id="fileLabel" name="fileLabel" for="customFile">Unggah file surat penugasan tim (L1)</label>
            </div>
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-danger">Submit</button>
          </div>
        </form>

      </div>
      <div class="col-md-5" style="background-color:#F9D9EB">
        <h1 class="text mb-5" style="font-size: 3em">Flowchart Pengajuan Koneksi</h1>
        <img src="{{ asset('assets/img/flowchart-con-req.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function setfilename() {
      var fileInput = document.getElementById('customFile');   
      if(fileInput.files.length > 0) {
        document.getElementById('fileLabel').innerHTML = fileInput.files[0].name;
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>