<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMasukController extends Controller
{
    public function pelanggan()
    {
        $pelanggan['pelanggan'] = DB::table('pelanggans')->get();
        return view('user.masuk');
    }
    public function loginuser(Request $request)
    {

        $validatedData = request()->validateRequest([
            'nama' => 'required',
            'nomor_meja' => 'required',
        ]);
        if (! $validatedData) {
        

            $save = DB::table('pelanggans')->insert([
            $pelanggan = new Pelanggan()
            $pelanggan->nama = $validatedData['nama'];
            $pelanggan->nomor_meja = $validatedData['nomor_meja'];
            ]);
        
            // Set session
            session()->put('id_pelanggan', $pelanggan->id);
        
            // Redirect ke halaman dashboard
            return redirect('/index');
        }else {
            // Validation errors occurred
            return redirect()->back()->withErrors($validatedData->errors());
        }
    }
}
