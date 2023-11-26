<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.add_pelanggan', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'usia' => 'required',
            'pekerjaan' => 'required',
            'nomor_meja' => 'required',
        ]);

        $save = DB::table('pelanggans')->insert([
            'nama_pelanggan' => $request->nama_pelanggan,
            'usia' => $request->usia,
            'pekerjaan' => $request->pekerjaan ,
            'nomor_meja' => $request->nomor_meja,
            ]);
    

        if ($save == true) {
            echo "<script>
            alert('Data berhasil di Tambahkan');
            window.location = '/pelanggan';
            </script>";
        } else {
            echo "<script>
            alert('Menu gagal di tambahkan');
            window.location ='/add_pelanggan';
            </script>";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggan['pelanggan'] = DB::table('pelanggans')->where('id', $id)->first();

        return view('admin.editpelanggan', $pelanggan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'usia' => 'required',
            'pekerjaan' => 'required',
            'nomor_meja' => 'required',
        ]);
      
        $simpan = DB::table('pelanggans')
            ->where('id', $id)
            ->update([
                'nama_pelanggan'  => $request->nama_pelanggan,
                'usia'  => $request->usia,
                'pekerjaan' => $request->pekerjaan,
                'nomor_meja' => $request->nomor_meja,
            ]);

        if ($simpan == true) {
            echo "<script>
            alert('Data berhasil di Update');
            window.location = '/pelanggan';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal di Update');
            window.location ='/edit/$id';
            </script>";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        DB::table('pelanggans')
        ->where('id', $req->id)
        ->delete();
    }
}
