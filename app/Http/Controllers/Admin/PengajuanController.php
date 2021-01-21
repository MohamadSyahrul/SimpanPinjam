<?php

namespace App\Http\Controllers\Admin;

use App\Data;
use App\Pengajuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanRequest;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pengajuan::all();
        return view('pages.admin.pengajuan.index',[
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataSimpanan = Data::all();
        return view('pages.admin.pengajuan.create',[
            'dataSimpanan' => $dataSimpanan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengajuanRequest $request)
    {
        $data = new Pengajuan;
        $data->nama = $request->nama;
        $data->kode_anggota_id = $request->kode_anggota_id;
        $data->jenis_pinjaman = $request->jenis_pinjaman;
        $data->lama_pinjam = $request->lama_pinjam;
        $data->save();
        return redirect()->route('pengajuan-pinjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pengajuan::findOrFail($id);
        $dataSimpanan = Data::all();

        return view('pages.admin.pengajuan.edit',[
            'item' => $item,
            'dataSimpanan' => $dataSimpanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(PengajuanRequest $request, $id)
    {
        $data = $request->all();
        $item = Pengajuan::findOrFail($id);
        $item->update($data);
        return redirect()->route('pengajuan-pinjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pengajuan::findOrFail($id);
        $item->delete();
        return redirect()->route('pengajuan-pinjaman.index');
    }
}
