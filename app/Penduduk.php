<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';

    public $timestamps = false;

    protected $fillable = [
        'nik', 'nama_penduduk', 'alamat_penduduk', 'status_menikah', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'foto_penduduk', 'pendidikan_terakhir', 'golongan_darah', 'agama', 'pekerjaan'
    ];

}
