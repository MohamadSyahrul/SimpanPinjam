<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data_anggota';
    protected $fillable = [
        'nama_anggota', 'slug', 'kode_anggota','NIK','ttl','jenis_kelamin','pekerjaan','alamat',
        'nomor_tlp'
    ];
    protected $hidden = [];

    public function pengajuans(){
        return $this->hasMany(Pengajuan::class, 'kode_anggota_id', 'id');
    }
}
