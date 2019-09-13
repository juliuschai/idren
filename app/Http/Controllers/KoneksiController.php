<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Koneksi;

class KoneksiController extends Controller
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

    public function index() 
    {
    	if (auth()->user()->instansi_id == null)
    	{
    		session()->flash('message', 'Mohon mengisi profile terlebih dahulu sebelum membuat permintaan koneksi');
    		return redirect()->route('home');
    	}
    	return view('koneksi.permintaan');
    }

    public function status() 
    {
    	return view('koneksi.status');
    }

	public function submit(Request $request) {
		$this->validate($request, [
			'nama_unit_pengelola_jaringan' => 'required|max:191',
			'nama_kepala_unit' => 'required|max:191',
            'email' => 'required|email|max:191',
            'nomer_hp' => 'required|max:20',
			'nama_penanggung_jawab_jaringan' => 'required|max:191',
            'nomor_asn' => 'required_without:alamat_ip|max:20',
            'alamat_ip' => 'required_without:nomor_asn|max:190',
			'nama_penyedia_jasa_internet' => 'required|max:191',
			'nama_pic' => 'required|max:191',
            'nomor_hp_pic' => 'required|max:20',
            'bandwidth_internet' => 'required|max:15',

			'nama_penyedia_jasa_internet_2' => 'required_with:nama_pic_2,nomor_hp_pic_2,bandwidth_internet_2|max:191',
			'nama_pic_2' => 'required_with:nama_penyedia_jasa_internet_2,nomor_hp_pic_2,bandwidth_internet_2|max:191',
            'nomor_hp_pic_2' => 'required_with:nama_penyedia_jasa_internet_2,nama_pic_2,bandwidth_internet_2|max:20',
            'bandwidth_internet_2' => 'required_with:nama_penyedia_jasa_internet_2,nama_pic_2,nomor_hp_pic_2|max:15',
            'customFile' => 'required'
		]);

		$koneksi = new Koneksi;
		$koneksi->user_id = auth()->user()->id;
		$koneksi->nama_unit_pengelola_jaringan = $request->nama_unit_pengelola_jaringan;
		$koneksi->nama_kepala_unit = $request->nama_kepala_unit;
		$koneksi->email = $request->email;
		$koneksi->nomer_hp = $request->nomer_hp;
		$koneksi->nama_penanggung_jawab_jaringan = $request->nama_penanggung_jawab_jaringan;
		$koneksi->nomor_asn = $request->nomor_asn;
		$koneksi->alamat_ip = $request->alamat_ip;
		$koneksi->nama_penyedia_jasa_internet = $request->nama_penyedia_jasa_internet;
		$koneksi->nama_pic = $request->nama_pic;
		$koneksi->nomor_hp_pic = $request->nomor_hp_pic;
		$koneksi->bandwidth_internet = $request->bandwidth_internet;
		$koneksi->nama_penyedia_jasa_internet_2 = $request->nama_penyedia_jasa_internet_2;
		$koneksi->nama_pic_2 = $request->nama_pic_2;
		$koneksi->nomor_hp_pic_2 = $request->nomor_hp_pic_2;
		$koneksi->bandwidth_internet_2 = $request->bandwidth_internet_2;
		//files are saved at idren\storage\app
		$file = $request->file('customFile');
		$koneksi->file_path = $file->store('surat', ['disk' => 'public']);

		$koneksi->save();
		return redirect()->route('home');
    }
}
