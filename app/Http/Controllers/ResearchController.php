<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Research;

class ResearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() 
    {
        $researches = 
        Research::join('users', 'users.id', '=', 'researches.user_id')
            ->select('researches.id','researches.judul', 'users.name','researches.kategori', 'researches.created_at')
            ->paginate(20);

        foreach ($researches as $research) {
            $research->kategori = strtok($research->kategori, ',');
        }

    	return view('research.home', compact('researches'));
    }

    public function new() 
    {
        return view('research.new');
    }

    public function saveNew(Request $request) 
    {
        $this->validate($request, [
            'judul' => 'required|max:191',
            'abstrak' => 'required|max:65000',
            'kategori' => 'required',
            'customFile' => 'required',
        ]);

        $research = new Research;
        $research->user_id = auth()->user()->id;
        $research->judul = $request->judul;
        $research->abstrak = $request->abstrak;

        $kategori = implode(',', $request->kategori);
        $research->kategori = $kategori;

        $file = $request->file('customFile');
        $research->file_path = $file->store('research');
        $research->save();


    	return redirect()->route('research');
    }

    public function view($id) 
    {
        $research = Research::join('users', 'users.id', '=', 'researches.user_id')
            ->where('researches.id', $id)
            ->select('researches.id','researches.judul', 'researches.abstrak', 'researches.kategori', 'users.name', 'users.email')
            ->firstorfail();

        $kategoris = explode(', ', $research->kategori);



    	return view('research.item', compact('research', 'kategoris'));
    }

}
