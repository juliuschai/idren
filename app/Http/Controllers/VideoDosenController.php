<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Video;
use App\Comment;
use \Storage;

use Intervention\Image\ImageManagerStatic as Image;

class VideoDosenController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{   //needs authentication to view page
		$this->middleware('auth');
		$this->middleware('dosen_or_admin');
	}

	public function indexUpload() {
		return view('video.upload');
	}

	public function saveUpload(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:191',
            'desc' => 'required|max:65000',
            'kategori' => 'required',
            'customVid' => 'required|mimetypes:video/mp4,video/ogg,video/webm',
            'thumbnail' => 'required|max:1500',
        ]);

        $kategori = implode(', ', $request->kategori);
        $file = $request->file('customVid');

        $video = new Video;
        $video->user_id = auth()->user()->id;
        $video->judul = $request->judul;
        $video->desc = $request->desc;
        $video->kategori = $kategori;
        $video->file_path = $file->store('', ['disk' => 'public_videos']);

        $file = $request->file('thumbnail');
        $file_name = $file->hashName();
        $image = Image::make($file);
        if ($image->width() > 200) {
            $image = $image->widen(200);
        }
        if ($image->height() > 200) {
            $image = $image->heighten(200);
        }
        Storage::disk('thumbnail')->put($file_name, $image->encode());
        $video->thumbnail = $file_name;

        $video->save();

        $video->file_name = strtok($video->file_path, '.');
    	return redirect()->route('video.view', ['id' => $video->file_name]);
    }

	public function indexEdit() {
		$id = Input::get('id');
		$video = 
			Video::join('users', 'users.id', '=', 'videos.user_id')
			->where('videos.file_path', 'LIKE', '%'.$id.'%')
			->select('videos.id', 'videos.user_id', 'users.name', 'videos.judul', 'videos.desc', 'videos.views', 'videos.file_path')
			->firstorfail();

		self::userIsOwner($video->user_id);

		$video->file_name = $id;
		return view('video.edit', compact('video'));
	}

	public function saveEdit(Request $request)
    {
        $this->validate($request, [
        	'id' => 'required',
        ]);

		$video = 
			Video::join('users', 'users.id', '=', 'videos.user_id')
			->where('videos.file_path', 'LIKE', '%'.$request->id.'%')
			->select('videos.id', 'videos.user_id', 'videos.thumbnail', 'videos.file_path')
			->firstorfail();
        
		self::userIsOwner($video->user_id);
        
        $this->validate($request, [
            'judul' => 'required|max:191',
            'desc' => 'required|max:65000',
            'kategori' => 'required',
            'thumbnail' => 'max:1500',
        ]);

        $kategori = implode(', ', $request->kategori);

        $video->judul = $request->judul;
        $video->desc = $request->desc;
        $video->kategori = $kategori;

        $file = $request->file('thumbnail');
        if ($file) {
            Storage::disk('thumbnail')->delete($video->thumbnail);
	        $file_name = $file->hashName();
	        $image = Image::make($file);

	        if ($image->width() > 200) {
	            $image = $image->widen(200);
	        }
	        if ($image->height() > 200) {
	            $image = $image->heighten(200);
	        }

	        Storage::disk('thumbnail')->put($file_name, $image->encode());
	        $video->thumbnail = $file_name;
        }

        $video->save();

        $video->file_name = strtok($video->file_path, '.');
    	return redirect()->route('video.view', ['id' => $video->file_name]);
    }

	public function delete(Request $request) {
		$video = 
			Video::where('videos.file_path', 'LIKE', '%'.$request->id.'%')
			->firstorfail();

		self::userIsOwner($video->user_id);

        Storage::disk('thumbnail')->delete($video->thumbnail);
        Storage::disk('public_videos')->delete($video->file_path);

		$video->delete();

        return redirect()->route('video.search');
	}

	function userIsOwner($user_id) {
		 if (auth()->user()->id != $user_id)
	 	{
	 		abort(404);
	 	}
	}
}
