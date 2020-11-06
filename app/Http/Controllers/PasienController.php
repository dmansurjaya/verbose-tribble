<?php

namespace App\Http\Controllers;

use App\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

 public function __construct()
 {
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pasien::all();
        return view('pasien.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = new Pasien();
      $data->nomor_rm = $request->nomor_rm;
      $data->nama_lengkap = $request->nama_lengkap;

      $data->save();
      return redirect()->route('pasien.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Pasien::where('id', $id)->get();

       return view('pasien.edit', compact('data'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pasien::where('id', $id)->first();
        $data->nomor_rm = $request->nomor_rm;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->save();
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = Pasien::where('id', $id)->first();
        $data->delete();
        return redirect()->route('pasien.index');
    }
}
