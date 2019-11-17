<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use App\University;
use App\Playlist;
use App\User;
use App\RequestAdminInstansi;
use App\Koneksi;
use \Storage;
use Illuminate\Http\Request;

class HaluController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $obj = RequestAdminInstansi::join('users','users.id','=','request_admin_instansi.user_id')
                ->select(['request_admin_instansi.id','users.name', 'request_admin_instansi.user_id', 'request_admin_instansi.data'])
                ->where('status','=','pending')
                ->paginate(10);

        $obj2 = Koneksi::join('users','users.id','=','koneksis.user_id')
                ->join('universities','universities.id','=','users.instansi_id')
                ->select(['universities.instansi', 'koneksis.*'])
                ->where('koneksis.verified', NULL)
                ->orderBy('koneksis.created_at')
                ->paginate(10);

        foreach($obj as $childs) {
            $obj->user = User::find($childs->user_id);
        }
        
        return view('p2-new', compact('obj', 'obj2'));
    }

    // Accept an admin request
    public function requestadminaccept(Request $request) {
        $obj = RequestAdminInstansi::find($request->id);
        $obj->status = 'confirmed';
        $obj->verified_at = date('Y-m-d H:i:s');

        $user_id = $obj->user_id;

        $user = User::find($user_id);
        $user->otoritas = 3;

        $user->save();
        $obj->save();

        return redirect('p2');
    }

    // Refuse an admin request
    public function requestadminrefuse(Request $request) {
        $obj = RequestAdminInstansi::find($request->id);
        $obj->status = 'declined';
        $obj->save();

        return redirect('p2');
    }

    // fungsi ini menghandle inputan (id koneksi) untuk dilakukan grant
    public function requestconnectionaccept(Request $request) {
        $obj = Koneksi::find($request->id);
        $obj->verified = date("Y-m-d H:i:s");

        $obj->save();
        
        return redirect('p2');
    }
    
    // fungsi ini menghandle inputan (id koneksi) untuk melakukan revoket
    public function requestconnectionrefuse(Request $request) {
        $obj = Koneksi::find($request->id);

        $obj->save();
        
        return redirect('p2');
    }

    public function research()
    {
        return view('research.home');
    }


}

use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
}