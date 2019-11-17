<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Koneksi;
use App\University;
use App\RequestAdminInstansi;


class HomeController extends Controller
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
        $user = auth()->user();
        if($user->otoritas < 4 && $user->otoritas != 1) {

            return view('home-admin-instansi', compact('user'));
        }
        else if($user->otoritas == 1) {
            $obj = RequestAdminInstansi::join('users','users.id','=','request_admin_instansi.user_id')
                ->select(['request_admin_instansi.id','users.name', 'request_admin_instansi.user_id', 'request_admin_instansi.data'])
                ->where('status','=','pending')
                ->paginate(10);

            foreach($obj as $childs) {
                $obj->user = User::find($childs->user_id);
            }

            $obj2 = Koneksi::join('users','users.id','=','koneksis.user_id')
                ->join('universities','universities.id','=','users.instansi_id')
                ->select(['universities.instansi', 'koneksis.id'])
                ->where('koneksis.verified', NULL)
                ->orderBy('koneksis.created_at')
                ->paginate(10);
            
            return view('p2-new', compact('obj', 'obj2'));
        }
        
        return view('home-new', compact('user'));
    }

    public function requestadmin() {
        $user = auth()->user();
        $universities = University::orderBy('instansi')->get(['id','instansi']);
        if (auth()->user()->instansi_id != null) {
            $user->instansiName = University::find(auth()->user()->instansi_id)->instansi;
        }

        return view('home-new-requestadmin', compact('universities', 'user'));
    }

    public function saveRequestAdmin(Request $request) {
        // obj untuk table requestadmininstansi
        $obj = new RequestAdminInstansi;   

        // variabel user
        $user = auth()->user();

        $file = $request->file('file');
        
        $fileName = md5($user->id . date("Y-m-d H:i:s")) . $file->getClientOriginalExtension();
        
        $tujuan_upload = 'bukti_request_admin';
 
                // upload file
        $file->move($tujuan_upload,$fileName);
        
        // masukkan variabel
        $obj->user_id = $user->id;
        $obj->data = array(
            "nama_universitas" => $request->fnama_universitas,
            "nama_unit_it" => $request->fnama_unit_it,
            "nama_kepala_unit" => $request->fnama_kepala_unit,
            "email" => $request->femail,
            "proof_url" => $tujuan_upload . '/' . $fileName
        );

        $obj->data = addslashes(json_encode($obj->data));
        $obj->requested_at = date("Y-m-d H:i:s");
        $obj->status = 'pending';

        $obj->save();

        return redirect('home');

    }

    public function research()
    {
        return view('research.home');
    }


}
