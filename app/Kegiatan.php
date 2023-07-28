<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "tb_kegiatan";

    protected $fillable = ['id_unitkerja', 'id_jabatan', 'pk_bk', 'tanggal'];
}
