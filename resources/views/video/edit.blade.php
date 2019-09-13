@extends('layouts.app')

@section('title')
idREN Research Collaboration
@endsection

@section('content')

	<div class="container mb-4">
		<div class="row">
			<div class="col-md-8 col-sm-12 mt-3">
        <form method="POST" action="{{ route('video.edit') }}" enctype="multipart/form-data" files="true">

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

          @csrf
          <input type="hidden" name="id" placeholder="" class="form-control" value="{{ $video->file_name }}">
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label text-dark">Judul</label>
            <div class="col-sm-9">
              <input type="text" id="judul" name="judul" placeholder="" class="form-control" value="{{ $video->judul }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="desc" class="col-sm-3 col-form-label text-dark">deskripsi</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="desc" name="desc" rows="5">{{ $video->desc }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label text-dark">Kategori</label>
            <div class="col-sm-9">
              <select class="form-control" name="kategori[]" id="kategori">
                <option value="">Pilih Kategori Utama</option>
                <option value="IoT">IoT</option>
                <option value="Kota cerdas">Kota cerdas</option>
                <option value="Jaringan">Jaringan</option>
                <option value="Lorem">Lorem</option>
                <option value="Dolor siet">Dolor siet</option>
                <option value="Lorem">Lorem</option>
                <option value="Ipsum">Ipsum</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="IoT" name="kategori[]" class="custom-control-input" value="IoT">
                <label class="custom-control-label" for="IoT">IoT</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="jaringan" name="kategori[]" class="custom-control-input" value="Jaringan">
                <label class="custom-control-label" for="jaringan">Jaringan</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="kotaCerdas" name="kategori[]" class="custom-control-input" value="Kota cerdas">
                <label class="custom-control-label" for="kotaCerdas">Kota cerdas</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="dolorSiet" name="kategori[]" class="custom-control-input" value="Dolor siet">
                <label class="custom-control-label" for="dolorSiet">Dolor siet</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="ipsum" name="kategori[]" class="custom-control-input" value="Ipsum">
                <label class="custom-control-label" for="ipsum">Ipsum</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="lorem" name="kategori[]" class="custom-control-input" value="Lorem">
                <label class="custom-control-label" for="lorem">Lorem</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="kotaCerdas" name="kategori[]" class="custom-control-input" value="Kota cerdas">
                <label class="custom-control-label" for="kotaCerdas">Kota cerdas</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="dolorSiet" name="kategori[]" class="custom-control-input" value="Dolor siet">
                <label class="custom-control-label" for="dolorSiet">Dolor siet</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="ipsum" name="kategori[]" class="custom-control-input" value="Ipsum">
                <label class="custom-control-label" for="ipsum">Ipsum</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="lorem" name="kategori[]" class="custom-control-input" value="Lorem">
                <label class="custom-control-label" for="lorem">Lorem</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="IoT" name="kategori[]" class="custom-control-input" value="IoT">
                <label class="custom-control-label" for="IoT">IoT</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="jaringan" name="kategori[]" class="custom-control-input" value="Jaringan">
                <label class="custom-control-label" for="jaringan">Jaringan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <input type="text" id="kategoriCustom" name="kategori[]" placeholder="Multiple kategori gunakan koma ex: Kategori1, Kategori dua, kat akhir" class="form-control" value="">
            </div>
          </div>
          <div class="custom-file">
            <input class="custom-file-input" type="file" id="thumbnail" name="thumbnail" onchange="setfilename()">
            <label class="custom-file-label text-muted" id="fileLabel" for="thumbnail">Unggah thumbnail baru (optional)</label>
          </div>
          <div class="form-group row">
            <div class="col-auto ml-auto">
              <button type="submit" class="btn btn-danger">Save</button>
            </div>
          </div>
        </form>

        <video controls>
					<source src="{{ asset('videos/'.$video->file_path) }}" type="video/mp4">
						Your browser does not support the video tag.
				</video>
			</div>

		</div>
	</div>
  <script type="text/javascript">
    function setfilename() {
      var fileInput = document.getElementById('thumbnail');   
      if(fileInput.files.length > 0) {
        document.getElementById('fileLabel').innerHTML = fileInput.files[0].name;
      }
    }
  </script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
		var lastScroll = 0, hundert;
		$(window).scroll(function () {
			//NAVIGATION FADEIN/OUT
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
@endsection
