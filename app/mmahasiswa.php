<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mmahasiswa extends Model
{
    protected $table = "mahasiswas";
    protected $primaryKey = "id";

    protected $guarded = [
        'update_at', 'created_at',
    ];
    
}
