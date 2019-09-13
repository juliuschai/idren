@extends('layouts.app')

@section('title')
idREN Research Collaboration
@endsection

@section('content')

  <div class="container mb-4">
    <div class="row">
      <div class="col-md-8 col-sm-12 mt-3">
        <div class="hmz-ajukan-penelitian">
          <h1 class="text-danger">Add new Playlist</h1>
        </div>
        <form method="POST" action="{{ route('playlist.add') }}" enctype="multipart/form-data" files="true">
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
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label text-dark">Judul</label>
            <div class="col-sm-9">
              <input type="text" id="judul" name="judul" placeholder="" class="form-control" value="{{ old('judul') }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="desc" class="col-sm-3 col-form-label text-dark">deskripsi</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="desc" name="desc" rows="5">{{ old('desc') }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-auto ml-auto">
              <button type="submit" class="btn btn-danger">Create Playlist</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function setfilename() {
      var fileInput = document.getElementById('customVid');   
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