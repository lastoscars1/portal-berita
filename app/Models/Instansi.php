<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
            protected $table = "instansi";
            protected $primaryKey = "instansi_id";   
            protected $fillable = [
                'instansi_id','nama_instansi','alamat_instansi','telepon_instansi','email_instansi'
        ];   
}
