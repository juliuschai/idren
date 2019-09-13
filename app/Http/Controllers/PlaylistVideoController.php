<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\PlaylistVideo;
use App\Playlist;

class PlaylistVideoController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{   //needs authentication to view page
		$this->middleware('auth');
	}

	public function viewPlaylist() 
	{
		$playlist_id = Input::get('id');

		if (!$playlist_id) {
			abort(404);
		}
		$playlist = Playlist::findorfail($playlist_id);

		$videos = PlaylistVideo::join('videos', 'videos.id', '=', 'playlist_videos.video_id')
			->where('playlist_id', $playlist_id)
			->get(['videos.judul', 'videos.desc', 'videos.file_path']);

        foreach ($videos as $video) {
            $video->file_name = strtok($video->file_path, '.');
        }

		return view('playlist.view', compact('videos', 'playlist'));
	}

	public function editPlaylist() 
	{
		$playlist_id = Input::get('id');

		if (!$playlist_id) {
			abort(404);
		}

		$playlist = Playlist::findorfail($playlist_id);

		self::userIsOwner($playlist->user_id);

		$videos = PlaylistVideo::join('videos', 'videos.id', '=', 'playlist_videos.video_id')
			->where('playlist_id', $playlist_id)
			->get(['playlist_videos.id', 'videos.judul', 'videos.desc', 'videos.file_path']);

        foreach ($videos as $video) {
            $video->file_name = strtok($video->file_path, '.');
        }

		return view('playlist.edit', compact('videos', 'playlist'));
	}

	public function addVideo(Request $request) {
        $this->validate($request, [
            'playlist_id' => 'required|integer|exists:playlists,id',
            'video_id' => 'required|integer|exists:videos,id',
        ]);

        $playlist_user_id = Playlist::findorfail($request->playlist_id)->user_id;
        self::userIsOwner($playlist_user_id);

        $playlistVideo = new PlaylistVideo;
        $playlistVideo->playlist_id = $request->playlist_id;
        $playlistVideo->video_id = $request->video_id;
        $playlistVideo->save();
        return redirect()->back();
	}

	public function deleteVideo(Request $request) {
		$playlistVideo = PlaylistVideo::findorfail($request->id);
		$playlist_user_id = Playlist::findorfail($playlistVideo->playlist_id)->user_id;
		self::userIsOwner($playlist_user_id);
		$playlistVideo->delete();
		return redirect()->back();
    }

	function userIsOwner($id) 
	{
		if (auth()->user()->id != $id) 
		{
			abort(404);
		}
	}
}
