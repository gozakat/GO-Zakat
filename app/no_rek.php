<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class no_rek extends Model
{
    protected $table='no_reks';
    protected $fillable=['nama_bank','norek','atas_nama'];
}
