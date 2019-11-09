<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Video;
use App\User;
use DateTime;

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
		// GET MAXIMUM DATE
		$date = DateTime::createFromFormat('U', time());
		$date->modify('-2 weeks');
		$date = $date->format('Y-m-d H:i:s');

		// DB JOBs
		$trendings = Video::select(['user_id', 'judul', 'views','created_at'])->orderBy('views')->where('created_at', '>', $date)->paginate(1);
		$trending_arr = array();

		// PUSH ROWS TO $trending_arr IF IT's LAST 2 WEEKS VIDEO
		foreach($trendings as $trending)
		{
			$today = DateTime::createFromFormat('U', time());
			$desired = $trending->created_at;
			$interval = $today->diff($desired);
			if($interval->days <= 14)
			{
				array_push($trending_arr, array(
					"user_id" => $trending->user_id,
					"judul" => $trending->judul,
					"views" => $trending->views,
					"created_at" => $trending->created_at,
					"score" => $trending->views/$interval->days
				));
			}
		}

		// ORDER ROW BY SCORE (views/period)
		$scores  = array_column($trending_arr, 'score');
		array_multisort($scores, SORT_DESC, $trending_arr);
		
		// TURN IT TO OBJECT
		$trendings = json_decode(json_encode($trending_arr));

    	return view('welcome-new', compact('dosens', 'trendings', 'universities'));
    }
}