<?php

namespace App\Http\Controllers\Api;

use App\Pengajuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    function get(){
        $data = Pengajuan::all();
        return response()->json(
            [
            "message" => "Success",
            "data" => $data
            ]
        );
        
    }
    function store(Request $request){
        $pengajuan = new Pengajuan;

        $pengajuan->nama = $request->nama;
        $pengajuan->kode_anggota_id = $request->kode_anggota_id;
        $pengajuan->jenis_pinjaman = $request->jenis_pinjaman;
        $pengajuan->lama_pinjam = $request->lama_pinjam;
        $pengajuan->save();

        return response()->json(
            [
            "message" => "Success",
            "data" => $pengajuan,
            ]
        );
    }    
    function update($id, Request $request){
        $pengajuan = Pengajuan::where('id', $id)->first();
        if($pengajuan){

            $pengajuan->nama = $request->nama ? $request->nama : $pengajuan->nama;
            $pengajuan->kode_anggota_id = $request->kode_anggota_id ? $request->kode_anggota_id : $pengajuan->kode_anggota_id;
            $pengajuan->jenis_pinjaman = $request->jenis_pinjaman ? $request->jenis_pinjaman : $pengajuan->jenis_pinjaman;
            $pengajuan->lama_pinjam = $request->lama_pinjam ? $request->lama_pinjam : $pengajuan->lama_pinjam;

            $pengajuan->save();
            return response()->json(
                [
                "message" => "Update method Success ",
                "data" => $pengajuan
                ]
            );
        }
        return response()->json(
            [
            "message" => "Product with id ".$id ." not found"
            ], 400
        );

    }    
    function destroy($id){
        $pengajuan = Pengajuan::where('id', $id)->first();
        if($pengajuan){
            $pengajuan->delete();
            return response()->json(
                [
                "message" => "DELETE Pengajuan id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Pengajuan with id ".$id ." not found"
            ], 400
        );
    }
}