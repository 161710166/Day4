<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
protected $table ='siswas';
protected $fillable = array('nis','nama','kelas_id','jk','tanggal_lahir','alamat');
}
public function kelas(){
	return $this->belongsTo('App\kelas', 'kelas_id');
}
