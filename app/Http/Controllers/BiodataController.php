<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{

    public function index()
    {
        $biodata = Biodata::latest()->get();
        return view('biodata.index', compact('biodata'));
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
         'nama' => 'required',
         'jk' => 'required',
         'no_tlp' => 'required',
         'email' => 'required'
         ]);
        $biodata = new Biodata();
        $biodata->nama = $request->nama;
        $biodata->jk = $request->jk;
        $biodata->no_tlp = $request->no_tlp;
        $biodata->email = $request->email;
        $biodata->save();
        return redirect()->route('tes2.index');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    public function update(Request $request, $id)
    {

{
    $this->validate($request, [
        'nama' => 'required|min:2',
        'jk' => 'required|min:5',
        'no_tlp' => 'required|min:5',
        'email' => 'required|min:5',
    ]);

    $biodata = Biodata::findOrFail($id);
    $biodata->nama = $request->nama;
    $biodata->jk = $request->jk;
    $biodata->no_tlp = $request->no_tlp;
    $biodata->email = $request->email;
    $biodata->save();

    return redirect()->route('biodata.index');
}
    }

    public function destroy(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();
        return redirect()->route('biodata.index');

    }
}
