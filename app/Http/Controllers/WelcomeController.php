<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Video;
use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $dosens = 
        	User::where('peran', 2)
        	->orderBy('views')
        	->select(['name', 'username', 'views', 'profile_picture'])
        	->paginate(5);
        $universities = 
        	University::orderByDesc('views')
        	->paginate(4);
        foreach ($universities as $university) {
        	$university->videos = 
        		Video::join('users', 'users.id', '=', 'videos.user_id')
        		->join('universities', 'universities.id', '=', 'users.instansi_id')
        		->where('universities.id', $university->id)
        		->select('videos.judul', 'videos.views', 'videos.thumbnail', 'videos.file_path')
				->paginate(4);
			foreach ($university->videos as $video) {
		        $video->file_name = strtok($video->file_path, '.');
			}

        }
    	return view('welcome-new', compact('dosens', 'universities'));
    }
	public function media()
	{
		return view('welcome-media');
	}
	public function resources()
	{
		return view('welcome-resources');
	}
	public function research_platform()
	{
		return view('welcome-research-platform');
	}
	public function eduroam()
	{
		return view('welcome-eduroam');
	}
}