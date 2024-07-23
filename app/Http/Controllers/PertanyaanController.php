<?php

namespace App\Http\Controllers;

use App\Models\JenisKepribadian;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::latest()->get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        $jenis = JenisKepribadian::all();

        return view('pertanyaan.create', compact('jenis'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',

        ]);

        $pertanyaan = new Pertanyaan();
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->id_jenis_kepribadian = $request->id_jenis_kepribadian;
        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jenis = JenisKepribadian::all();
        $pertanyaan = Pertanyaan::findOrFail($id);
        return view('pertanyaan.edit', compact('pertanyaan', 'jenis'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',

        ]);

        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->id_jenis_kepribadian = $request->id_jenis_kepribadian;
        $pertanyaan->save();
        return redirect()->route('pertanyaan.index');
    }

    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();
        return redirect()->route('pertanyaan.index');

    }
}
