<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use File;
use Response;
use App\Koneksi;
use App\User;

class KoneksiAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   //needs authentication to view page
        $this->middleware('auth');
		$this->middleware('admin');
    }

    public function admin() 
    {
        $koneksis = 
        Koneksi::join('users', 'users.id', '=', 'koneksis.user_id')
            ->join('universities', 'universities.id', '=', 'users.instansi_id')
            ->whereNull('koneksis.verified')
            ->select('koneksis.id', 'universities.instansi', 'users.name', 'users.email')
            ->get();

    	return view('koneksi.admin', compact('koneksis'));
    }

    public function viewKoneksi($id) 
    {
        $koneksi = 
        Koneksi::where('koneksis.id', '=', $id)
            ->firstorfail();

        $user = 
        User::join('universities', 'universities.id', '=', 'users.instansi_id')
            ->where('users.id', $koneksi->user_id)
            ->select('users.*', 'universities.instansi')
            ->firstorfail();

        $peran = $user->peran;
        if ($peran == 1) {
            $user->peran = "Mahasiswa";
        } else if ($peran == 2) {
            $user->peran = "Dosen";
        } else if ($peran == 3) {
            $user->peran = "Others";
        } else if ($peran == 4) {
            $user->peran = "Admin";
        } else {
            $user->peran = "Peran not set in database";
        }

    	return view('koneksi.view', compact('koneksi', 'user'));
    }

    public function download(Request $request)
    {
        $request->file = str_replace('/', '\\', $request->file);
        $path = storage_path('app\\' . $request->file);

        if (!File::exists($path)) {
            dump($path);
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $ext = pathinfo($path, PATHINFO_EXTENSION);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type)->header('Content-disposition','filename="'.$request->filename.'.'.$ext.'"');

        return $response;
    }

    public function acceptKoneksi(Request $request) 
    {
        $koneksi = Koneksi::findorfail($request->id);
        $koneksi->verified = new DateTime();
        $koneksi->save();

    	return redirect()->route('koneksi.admin');
    }

    public function deleteKoneksi(Request $request) 
    {
        Koneksi::findorfail($request->id)->delete();

    	return redirect()->route('koneksi.admin');
    }
}