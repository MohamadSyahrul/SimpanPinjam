<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan_pinjaman';
    protected $fillable = [
        'nama', 'kode_anggota_id','jenis_pinjaman','lama_pinjaman'
    ];
    protected $hidden = [];

    public function dataSimpanan(){
        return $this->belongsTo(Data::class, 'kode_anggota_id', 'id');
    }
}
