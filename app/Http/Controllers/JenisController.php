<?php

namespace App\Http\Controllers;

use App\Models\JenisKepribadian;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = JenisKepribadian::latest()->get();
        return view('jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
             'Jenis_kepribadian' => 'required',
             'pengertian' => 'required',
             'kelebihan' => 'required',
             'kekurangan' => 'required',
         ]);

        $jenis = new JenisKepribadian();
        $jenis->Jenis_kepribadian = $request->Jenis_kepribadian;
        $jenis->pengertian = $request->pengertian;
        $jenis->kelebihan = $request->kelebihan;
        $jenis->kekurangan = $request->kekurangan;
        $jenis->save();
        return redirect()->route('jenis.index');
    }

    public function edit($id)
    {
        $jenis = JenisKepribadian::findOrFail($id);
        return view('jenis.edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Jenis_kepribadian' => 'required',
            'pengertian' => 'required',
            'kelebihan' => 'required',
            'kekurangan' => 'required',
        ]);

        $jenis = JenisKepribadian::findOrFail($id);
        $jenis->Jenis_kepribadian = $request->Jenis_kepribadian;
        $jenis->pengertian = $request->pengertian;
        $jenis->kelebihan = $request->kelebihan;
        $jenis->kekurangan = $request->kekurangan;
        $jenis->save();
        return redirect()->route('jenis.index');
    }

    public function destroy($id)
    {
        $jenis = JenisKepribadian::findOrFail($id);
        $jenis->delete();
        return redirect()->route('jenis.index');
    }
}
