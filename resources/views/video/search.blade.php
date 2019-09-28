@extends('layouts.app')

@section('title')
idREN
@endsection

@section('content')

<div class="container mb-4">
  <div class="row">
    <div class="col-md-8 col-sm-12 mt-3">
      <div class="hmz-ajukan-penelitian">
        <h1 class="text-danger">Videos</h1>
      </div>
      <div class="row mb-3 mt-3">
        <div class="col-md-12">
          <form method="get" action="{{route('video.search')}}">
            <input type="text" name="keyword" value="{{ Request::get('keyword') }}" placeholder="Judul video" />
            <input type="text" name="searchKategoris" value="{{ Request::get('searchKategoris') }}" placeholder="Kategori koma untuk multiple kategori" />
            <button class="btn" type="submit">
              Search
            </button>
          </form>
          <div>Temp Dosen Display</div>
          <table>
            @foreach($dosens as $dosen)
            <tr>
              <td><img class="rounded-circle" style="height: 50px; width: 50px" src="{{asset($dosen->profile_picture ? 'profilepictures/'.$dosen->profile_picture : 'profilepictures/dummy.png')}}" alt=""></td>
              <td>{{ $dosen->name }}</td>
              <td>{{ $dosen->views }} views</td>
            </tr>
            @endforeach
          </table>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr class="bg-danger" style="color:#f9f9f9;">
                  <th scope="col">Thumbnail</th>
                  <th scope="col" class="hmz-list-judul">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Views</th>
                  <th scope="col">Pemilik</th>
                  <th scope="col" class="hmz-tgl">Tanggal</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($videos as $video)
                <tr>
                  <td><img src="{{ asset('thumbnail/'.$video->thumbnail) }}"></td>
                  <td>{{ $video->judul }}</td>
                  <td>{{ $video->kategori }}</td>
                  <td>{{ $video->views }}</td>
                  <td>{{ $video->name }}</td>
                  <td style="" class="hmz-tgl">{{ $video->created_at }}</td>
                  <td>
                    <a href="{{ route('video.view', ['id' => $video->file_name]) }}">
                      <button class="btn btn-danger">
                        Details
                      </button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $videos->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
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
