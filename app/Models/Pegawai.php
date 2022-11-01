<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
   protected $table = "pegawai";
   protected $primaryKey = "pegawai_id";   
   protected $fillable = [
        'pegawai_id','nip','nama','jabatan_id','alamat','tanggal_lahir'
   ];   
    public function jabatan(){
    return $this->belongsTo(Jabatan::class);
   }
   public function getCreatedAttribute(){
      return Carbon::parse($this->attribute['created_at'])
                  ->translatedFormat('1, d F Y');
   }
}
