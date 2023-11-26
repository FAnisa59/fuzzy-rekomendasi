<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu['menu'] = DB::table('menus')->get();

        return view('admin.addmenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
            $request->validate([
                'jenis_menu' => 'required',
                'nama_menu' => 'required',
                'harga' => 'required|numeric',
                'deskripsi' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            if($request->hasFile('gambar')){
                $gambarName = time() . '.' . $request->file('gambar')->extension();
                $request->file('gambar')->move(public_path('uploads'), $gambarName);
            }else{
                $gambarName = null;
            }
        
           
            // dd($gambarUp);
            $save = DB::table('menus')->insert([
                'jenis_menu' => $request->jenis_menu,
                'nama_menu' => $request->nama_menu,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarName,
            ]);
    
            if ($save == true) {
                echo "<script>
                alert('Menu berhasil di Tambahkan');
                window.location = '/menu';
                </script>";
            } else {
                echo "<script>
                alert('Menu gagal di tambahkan');
                window.location ='/addmenu';
                </script>";
            }
        }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu['menu'] = DB::table('menus')->where('id', $id)->first();

        return view('admin.editmenu', $menu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_menu' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if($request->hasFile('gambar')){
        $gambarName = time() . '.' . $request->file('gambar')->extension();
            $request->file('gambar')->move(public_path('uploads'), $gambarName);
        }else{
            $gambarName = null;
        }
        $simpan = DB::table('menus')
            ->where('id', $id)
            ->update([
                'jenis_menu'  => $request->jenis_menu,
                'nama_menu'  => $request->nama_menu,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarName
            ]);

        if ($simpan == true) {
            echo "<script>
            alert('Data berhasil di Update');
            window.location = '/menu';
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
    public function destroy(Request $id)
    {
        DB::table('menus')
        ->where('id', $id->id)
        ->delete();
    }
}
