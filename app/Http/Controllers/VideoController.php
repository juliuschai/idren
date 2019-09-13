<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Video;
use App\Comment;
use App\Playlist;

class VideoController extends Controller
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

	public function getVideo()
    {
		$id = Input::get('id');
		$video = 
			Video::join('users', 'users.id', '=', 'videos.user_id')
			->where('videos.file_path', 'LIKE', '%'.$id.'%')
			->select('videos.id', 'videos.user_id', 'users.name', 'videos.judul', 'videos.desc', 'videos.views', 'videos.kategori', 'videos.file_path')
			->firstorfail();
		$video->views = $video->views + 1;
		$video->save();

		$comments = 
			Comment::join('users', 'users.id', '=', 'comments.user_id')
			->where('comments.video_id', $video->id)
			->get(['comments.id', 'comments.user_id', 'users.name', 'comments.text', 'comments.created_at']);

        $video->file_name = strtok($video->file_path, '.');

        $user = User::findorfail($video->user_id);
        $user->views = $user->views + 1;
        $user->save();

		$playlists = 
			Playlist::where('user_id', auth()->user()->id)
				->get();

		return view('video.view', compact('video', 'comments', 'playlists'));
    }

	public function searchVideo()
    {
		$keyword = Input::get('keyword');
		$searchKategori = Input::get('searchKategoris') ? :'%';

        $searchKategoris = explode(', ', $searchKategori);
		$videos = 
			Video::join('users', 'users.id', '=', 'videos.user_id')
			->where(function($query) use($searchKategoris){
				foreach($searchKategoris as $searchKategori){
				    $query->orWhere('videos.kategori', 'LIKE', '%'.$searchKategori.'%');
				}
			})
			->where('videos.judul', 'LIKE', '%'.$keyword.'%')
			->orderByDesc('videos.views')
			->select('users.name', 'videos.judul', 'videos.kategori', 'videos.desc', 'videos.views', 'videos.thumbnail', 'videos.file_path', 'videos.created_at')
			->paginate(20);
        
        foreach ($videos as $video) {
            $video->kategori = strtok($video->kategori, ',');
            $video->file_name = strtok($video->file_path, '.');
        }

        $dosens = 
        	User::where('peran', 2)
        	->orderBy('views')
        	->get(['name', 'views']);

		$videos->appends(['keyword' => $keyword]);
		return view('video.search', compact('videos', 'dosens'));
    }

	public function commentVideo(Request $request)
	{
        $this->validate($request, [
            'video_id' => 'required',
            'text' => 'required|max:65000',
        ]);

		$comment = new Comment;
		$comment->user_id = auth()->user()->id;
		$comment->video_id = $request->video_id;
		$comment->text = $request->text;
		$comment->save();

		return redirect()->back();
    }

	public function deleteComment(Request $request)
	{
		$comment = Comment::findorfail($request->id);

		self::userIsOwner($comment->user_id);
		$comment->delete();

		return redirect()->back();
	}
	function userIsOwner($id) {
		if (auth()->user()->id != $id) {
			abort(404);
		}
	}
}
