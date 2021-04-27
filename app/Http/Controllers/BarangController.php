<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = $barang = DB::table('barang')->get(); // Mengambil semua isi tabel
        $posts = Barang::orderBy('Id_barang', 'desc')->paginate(6);
        return view('barang.index', compact('barang'));
        // with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Id_barang' => 'required',
            'Nama_barang' => 'required',
            'Deskripsi' => 'required',
            ]);
        Barang::create($request->all());
        return redirect()->route('barang.index')
        ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_barang)
    {
        //
        $Barang = Barang::find($Id_barang);
        return view('barang.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_barang)
    {
        //
        $Barang = DB::table('barang')->where('id_barang', $Id_barang)->first();;
        return view('barang.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_barang)
    {
        //
        $request->validate([
            'Id_barang' => 'required',
            'Nama_barang' => 'required',
            'Deskripsi' => 'required',
            ]);

            Barang::find($Id_barang)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
             return redirect()->route('barang.index')
             ->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_barang)
    {
        //
        Barang::find($Id_barang)->delete();
        return redirect()->route('barang.index')
        -> with('success', 'Barang Berhasil Dihapus');
    }
}
