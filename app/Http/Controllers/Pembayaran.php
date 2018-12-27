<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Zakat;
class Pembayaran extends Controller
{
    
    public function create()
    {
        return view('zakat/create');
    }

    public function store(Request $request)
    {

        $zakat = new Zakat;
        $zakat->nama=$request->nama;
        $zakat->alamatuser=$request->alamatuser;
        $zakat->jenis_zakat=$request->jenis_zakat;
        $zakat->jumlah_Rp=$request->jumlah_Rp;
        $zakat->transfer=$request->transfer;
        
       /*  $zakat = new Zakat;
        $zakat = Zakat::create(['nama'=>$request->nama]);
        $zakat = Zakat::create(['alamat'=>$request->alamat]);
        $zakat = Zakat::create(['jenis_zakat'=>$request->jenis_zakat]);
        $zakat = Zakat::create(['jumlah_Rp'=> $request->jumlah_Rp]);
         */
        $zakat->save();
        return redirect('/tampil/index');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
