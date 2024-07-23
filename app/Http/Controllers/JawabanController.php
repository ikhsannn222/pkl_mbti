<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Jawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index()
    {
        $jawaban = Jawaban::latest()->get();
        return view('jawaban.index', compact('jawaban'));
    }

    public function create()
    {
        $pertanyaan = Pertanyaan::all();

        return view('jawaban.create', compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jawaban' => 'required',
            'tanggal' => 'required',
            'id_pertanyaan' => 'required',
        ]);

        $jawaban = new Jawaban();
        $jawaban->jawaban = $request->jawaban;
        $jawaban->tanggal = $request->tanggal;
        $jawaban->id_pertanyaan = $request->id_pertanyaan;
        $jawaban->save();
        return redirect()->route('jawaban.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::all();
        $jawaban = Jawaban::findOrFail($id);
        return view('jawaban.edit', compact('jawaban', 'pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jawaban' => 'required',
            'tanggal' => 'required',

        ]);

        $jawaban = Jawaban::findOrFail($id);
        $jawaban->jawaban = $request->jawaban;
        $jawaban->tanggal = $request->tanggal;
        $jawaban->id_pertanyaan = $request->id_pertanyaan;
        $jawaban->save();
        return redirect()->route('jawaban.index');
    }

    public function destroy($id)
    {
        $jawaban = Jawaban::findOrFail($id);
        $jawaban->delete();
        return redirect()->route('jawaban.index');

    }
}
