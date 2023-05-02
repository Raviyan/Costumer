<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public $costumer;
    // membuat instance dari model artikel
    public function __construct()
    {
        $this->costumer = new Costumer();
    }

    public function index()
    {
        //sama persis kaya "select * ......"
        $data = Costumer::all();
        //cek query jalan atau gak
        //dump and die = var_dump
        // dd($data);
        return view('costumer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('costumer.create');
    }

    //BUAT NAMBAH DATA
    public function store(Request $request)
    {
        $rules = [
            
        ];

        $messages = [
            

        ];

        $this->validate($request, $rules, $messages);

        $this->costumer->nama_costumer= $request->nama_costumer;
        $this->costumer->alamat = $request->alamat;
        $this->costumer->kota = $request->kota;
        $this->costumer->email = $request->email;
        $this->costumer->hp = $request->hp;
        $this->costumer->perusahaan = $request->perusahaan;
        

        // simpan data menggunakan method save()
        $this->costumer->save();

        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('costumer')->with('status', 'Data costumer berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //bikin variable buat nampung id
        //kl ga ktmu id nya maka di redirect ke hal.404 not found
        $show = Costumer::findOrFail($id);
        // dd($show);
        return view('costumer.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = Costumer::findOrFail($id);
        // dd($edit);
        return view('costumer.edit', compact('edit'));
    }

    //Request nampilin nilai yg diisi/diinput user
    public function update(Request $request, $id)
    {
        $update = Costumer::findOrFail($id);

        $update->nama_costumer= $request->nama_costume;
        $update->alamat = $request->alama;
        $update->kota = $request->kot;
        $update->email = $request->emai;
        $update->hp = $request->h;
        $update->perusahaan = $request->perusahaa;

        

        $update->save();
        return redirect()->route('costumer')->with('status', 'Data Costumer berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Costumer::findOrFail($id);

        $destroy->delete();
        return redirect()->route('costumer')->with('status', 'Data costumer berhasil dihapus');
    }
}
