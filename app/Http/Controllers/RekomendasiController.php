<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use App\Models\Pelanggan;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekomendasi = Rekomendasi::all();
        $menu = Menu::all();
        return view('admin.rekomendasi', compact('rekomendasi', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rekomendasi = Rekomendasi::all();
        $menu = Menu::all();
        $pelanggan = Pelanggan::all();
        return view('admin.add_data', compact('rekomendasi', 'menu','pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'jenis_menu' => 'required',
            'nama_menu' => 'required',
            'rasa' => 'required',
            'harga' => 'required|numeric',
            'plating' => 'required|numeric',
            'ulasan' => 'required',
            
        ]);

        $save = DB::table('ms')->insert([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_menu' => $request->nama_menu,
            'rasa' => $request->rasa,
            'harga' => $request->harga,
            'plating' => $request->plating,
            'ulasan' => $request->ulasan,
            
        ]);

        if ($save == true) {
            echo "<script>
            alert('Data berhasil di Tambahkan');
            window.location = '/rekomendasi';
            </script>";
        } else {
            echo "<script>
            alert('Menu gagal di tambahkan');
            window.location ='/add_data';
            </script>";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(rekomendasi $rekomendasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rekomendasi $rekomendasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rekomendasi $rekomendasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rekomendasi $rekomendasi)
    {
        //
    }
}
