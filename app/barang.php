<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = "tbarangs";
    protected $primaryKey = "id_barang";

    protected $guarded = [
        'update_at', 'created_at',
    ];
}
