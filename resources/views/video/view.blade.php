@extends('layouts.app')

@section('title')
idREN Research Collaboration
@endsection

@section('content')
	<link rel="stylesheet" href="{{ asset('css/custom-overlay.css') }}"/>

  <div id="overlay" class="overlay" onclick="off()">
  	<h3>Add To Playlist</h3>
  	@foreach($playlists as $playlist)
  		<form method="POST" action="{{ route('playlist.video.add') }}">
  			@csrf
  			<input type="hidden" name="playlist_id" value="{{ $playlist->id }}">
  			<input type="hidden" name="video_id" value="{{ $video->id }}">
  			<button type="submit" class="btn btn-light">{{ $playlist->judul }}</button>
  		</form>
  	@endforeach
  	<a href="{{ route('playlist.add') }}">
	    <button class="btn btn-primary">Create New Playlist</button>
	  </a>
  </div>
	<div class="container mb-4">
		<div class="row">
			<div class="col-md-8 col-sm-12 mt-3">
				<div class="hmz-ajukan-penelitian">
					<h1 class="text-danger">{{ $video->judul }}</h1>
				</div>
				@dosenoradmin
					@if(auth()->user()->id == $video->user_id)
					<a href="{{ route('video.edit', ['id' => $video->file_name]) }}">Edit</a>
					<form method="POST" action="{{ route('video.delete') }}">
						@csrf
						<input type="hidden" name="id" value="{{ $video->file_name }}">
						<button type="submit" class="btn btn-link"> Delete</button>
					</form>
					@endif
				@enddosenoradmin
				<video controls>
					<source src="{{ asset('videos/'.$video->file_path) }}" type="video/mp4">
					Your browser does not support the video tag.
				</video>
				<button type="button" onclick="on()" class="btn btn-link">Add to playlist</button>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label text-dark">Views</label>
					<label class="col-sm-3 col-form-label text-dark">{{ $video->views }}</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label text-dark">Author</label>
					<label class="col-sm-3 col-form-label text-dark">{{ $video->name }}</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label text-dark">Kategori</label>
					<label class="col-sm-3 col-form-label text-dark">{{ $video->kategori }}</label>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label text-dark">Deskripsi</label>
					<label class="col-sm-3 col-form-label text-dark">{{ $video->desc }}</label>
				</div>
	      <form method="POST" action="{{ route('video.comment') }}">
	      	@csrf
	        <div class="form-group row">
	        	<input type="hidden" name="video_id" value="{{ $video->id }}">
	          <label for="text" class="col-sm-3 col-form-label text-dark">Comment</label>
	          <div class="col-sm-9">
	            <textarea class="form-control" id="text" name="text" rows="5"></textarea>
	          </div>
	        </div>
          <div class="form-group row">
            <div class="col-auto ml-auto">
              <button type="submit" class="btn btn-danger">Add Comment</button>
            </div>
          </div>
	      </form>
	      Comments
	      @foreach($comments as $comment)
				<div class="form-group row">
					<label class="col-sm-3 col-form-label text-dark">{{ $comment->name }}</label>
					<label class="col-sm-3 col-form-label text-dark">{{ $comment->text }}</label>
					<label class="col-sm-3 col-form-label text-dark">{{ $comment->created_at }}</label>
					@if(auth()->user()->id == $comment->user_id)
						<form method="POST" action="{{ route('video.comment.delete') }}">
							@csrf
							<input type="hidden" name="id" value="{{ $comment->id }}">
							<button type="submit" class="btn btn-link">Delete</button>
						</form>
					@endif
				</div>
				@endforeach
			</div>

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function on() {
		  document.getElementById("overlay").style.display = "block";
		}

		function off() {
		  document.getElementById("overlay").style.display = "none";
		}
	</script>
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
