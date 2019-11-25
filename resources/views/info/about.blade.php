@extends('layouts.app')

@section('title')
	idREN About
@endsection

@section('content')
	<div class="container mt-4 pt-5">
    <div class="row">
      <div class="col-sm-5 my-auto mx-auto">
        <video width="450px" height="250px" controls>
          <source src="{{ asset('videos/IDrenAbout.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="col-sm">
        <h1 class="text-center pt-5 pb-5 font-weight-bold">Pengantar IDREN</h2>
        <p class="text-center">
			Jejaring Riset dan Edukasi Indonesia (Indonesia Research and Education Networks, IDREN) adalah infrastruktur jaringan khusus yang menghubungkan institusi dan komunitas riset dan pendidikan di Indonesia. Jaringan ini didedikasikan untuk konektivitas komunikasi data yang diperlukan untuk memungkinkan komunitas para peneliti, akademisi dan pengembang untuk berkolaborasi bersama.
		</p>
		<p class="text-center">
			Infrastruktur jaringan IDREN terwujud berkat dukungan dan kolaborasi antara komunitas industri telekomunikasi (operator jaringan, penyedia layanan internet) yang mengelola konektivitas sampai layer dua (fisik) dan komunitas riset dan pendidikan  yang mengelola konektivitas di layer tiga (jaringan), serta dukungan konektivitas menuju REN global (TEIN) dari Kementerian Riset, Teknologi dan Pendidikan Tinggi.
		</p>
		<p class="text-center">
			Dengan konektivitas IDREN ke REN global melalui jaringan TEIN (Trans Euroasia Information Network), kolaborasi global antara komunitas riset dan pendidikan dapat berjalan di atas jaringan ini, seperti e-learning, konferensi video dan manajemen data riset lintas batas internasional.
		</p>
      </div>
    </div>
  </div>
  <br><br><br><br>
  <div class="container">
    <div class="container">
		<div data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center pt-5 pb-5 font-weight-bold">Manfaat IDREN</h1>
        </div>
        <p class="text-center">
            Manfaat bergabung ke jaringan IDREN diantaranya:
        </p>
		<ol type="1">
			<li>
				Akses jaringan REN global dengan kualitas dan kinerja lebih baik, termasuk:
				<ol type="a">
					<li>sumber data set dan informasi sains terkini ke lembaga riset dan pendidikan.</li>
					<li>materi terbuka, kuliah terbuka dan kuliah daring.</li>
					<li>konferensi video antar institusi.</li>
				</ol>
			</li>
			<li>Akses ke sumber daya komputasi grid global (melalui LIPI).</li>
			<li>Identitas tunggal untuk mengakses wireless access point EDUROAM di seluruh lembaga riset dan perguruan tinggi dunia.</li>
			<li>Kolaborasi dalam jejaring proyek riset nasional dan global (misal Horizon 2020, dll.)</li>
			<li>Kegiatan berbagi pengetahuan, ketrampilan dan  keahlian melalui kolaborasi dalam berbagai komunitas termasuk telemedicine, IoT, perubahan iklim dll.</li>
			<li>Kontribusi pengembangan IPTEKS yang dapat diakses melalui open data sains.</li>
			<li>Pertukaran sumber daya informasi antar anggota komunitas riset dan pendidikan.</li>
			<li>Ekspose keahlian di antara komunitas riset dan pendidikan.</li>
			<li>Pemanfaatan platform dan atau aplikasi bersama dalam komunitas riset dan pendidikan.</li>
		</ol>
		<br><br><br>
		<div data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center pt-5 pb-5 font-weight-bold">Bagaimana Cara Bergabung</h1>
        </div>
        <p class="text-center">
			Institusi Riset/Pendidikan/Industri dapat bergabung dengan :
		</p>
		<ol type="1">
			<li>Mendaftar (sign up) melalui website idren.id, atau ke <a href="mailto:hello@idren.id">hello@idren.id</a> sebagai admin institusi.</li>
			<li>Mengisi form permintaan koneksi IDREN melalui admin institusi.</li>
			<li>Menunggu tanggapan dari tim admin jaringan IDREN.</li>
		</ol>
		<p class="text-center">
			Pribadi (dosen, peneliti, mahasiswa, praktisi industri) dapat bergabung dengan :
		</p>
		<ol type="1">
			<li>Mendaftar (sign up) melalui website idren.id atau ke hello@idren.id sebagai anggota/dosen/mahasiswa/umum.</li>
			<li>Menunggu validasi dan konfirmasi dari admin institusi.</li>
		</ol>
    </div>
  </div>
  <!-- ################# Content 1 selesai ################# -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
  </script>
  <script>
    var lastScroll = 0, hundert;
    $(window).scroll(function () {
      var st = $(document).scrollTop();
      if (st > 250 && st > lastScroll) {
        $('.hmz-navbar-mobile').addClass('hidden');
        hundert = st;
      }
      else if (st < (hundert - 33)) {
        $('.hmz-navbar-mobile').removeClass('hidden');
      }
      lastScroll = st;
    });
  </script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 100,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 4,
            nav: false,
            loop: false
          }
        }
      });
    });
  </script>
  <script>
    // punyanya owl craousel nya member
    $('.hmz-member').owlCarousel({
      stagePadding: 50,
      loop: true,
      margin: 30,
      nav: false,
      autoplay: true,
      autoplayTimeout: 800,
      autoplayHoverPause: true,
      dots: false,
      responsive: {
        0: {
          items: 6
        },
        600: {
          items: 8
        },
        1000: {
          items: 12
        }
      }
    })
  </script>
@endsection