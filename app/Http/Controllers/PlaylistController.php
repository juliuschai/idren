<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;

class PlaylistController extends Controller
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

	public function indexAddPlaylist(Request $request) {
        $referrer = $request->headers->get('referer');
        $videoID = explode('=', $referrer)[1];
        session()->put('videoID', $videoID);

		return view('playlist.add');
	}

	public function saveAddPlaylist(Request $request) {
        $this->validate($request, [
            'judul' => 'required|max:191',
            'desc' => 'required|max:65000',
        ]);

        $playlist = new Playlist;
        $playlist->user_id = auth()->user()->id;
        $playlist->judul = $request->judul;
        $playlist->desc = $request->desc;
        $playlist->save();
        
        $videoID = session()->get('videoID');

        return redirect()->route('video.view', ['id' => $videoID]);
	}

	public function deletePlaylist(Request $request)
	{
        $playlist = Playlist::findorfail($request->id);
        self::userIsOwner($playlist->user_id);
       	$playlist->delete();
       	return redirect()->back();
	}

	function userIsOwner($id) 
	{
		if (auth()->user()->id != $id){
			abort(404);
		}
	}
}
