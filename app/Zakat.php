<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    protected $fillable=['nama','alamatuser','jenis_zakat','jumlah_Rp','transfer'];
}
