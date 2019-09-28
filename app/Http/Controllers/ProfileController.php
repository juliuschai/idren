<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use App\University;
use App\Playlist;
use App\User;
use \Storage;

use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexProfile()
    {
    	$username = Input::get('username');
        $user = 
        	User::where('username', $username)
        	->firstorfail();
        $user->instansiName = University::find($user->instansi_id)->instansi;

        $playlists = 
        	Playlist::where('user_id', $user->id)
        	->paginate(10);
        	
		return view('profile.index', compact('user', 'playlists'));
    } 
    public function indexChangeProfile() 
    {
        $user = auth()->user();
        $universities = University::orderBy('instansi')->get(['id','instansi']);
        if (auth()->user()->instansi_id != null) {
            $user->instansiName = University::find(auth()->user()->instansi_id)->instansi;
        }
        $playlists = 
        	Playlist::where('user_id', auth()->user()->id)
        	->paginate(10);

        return view('profile.change', compact('user', 'universities', 'playlists'));
    }

    public function saveChangeProfile(Request $request) 
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:191'],
            'phone_number' => ['required', 'string', 'max:20'],
            'instansi_id' => ['required', 'string', 'max:191'],
            'profilePic' => ['max:500'],
        ]);

        $instansi_id = University::where('instansi', '=', $request['instansi_id'])->first()->id;
        $user = auth()->user();
        $user->name = $request['name'];
        $user->phone_number = $request['phone_number'];
        $user->instansi_id = $instansi_id;
        
        $file = $request->file('profilePic');
        if ($file) {
            $currentProfilePic = $user->profile_picture;
            if ($currentProfilePic) {
                Storage::disk('profile_pictures')->delete($currentProfilePic);
            }
            $file_name = $file->hashName();

            $image = Image::make($file);
            if ($image->width() > 200) {
                $image = $image->widen(200);
            }
            if ($image->height() > 200) {
                $image = $image->heighten(200);
            }
            Storage::disk('profile_pictures')->put($file_name, $image->encode());

            $user->profile_picture = $file_name;
        }
        $user->save();

        // to finally create image instances

        $universities = University::orderBy('instansi')->get(['id','instansi']);
        $success = "Berhasil mengupdate profil";
        return redirect()->back()->with(compact('user', 'universities', 'success'));
    }
}
