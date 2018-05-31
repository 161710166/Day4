<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
protected $table ='absens';
protected $fillable = array('siswa_id','kelas_id','keterangan','alasan','piket_id');
}
public function siswa(){
	return $this->belongsTo('App\nama', 'siswa_id');
}
public function kelas(){
	return $this->belongsTo('App\kelas', 'kelas_id');
}
public function piket(){
	return $this->belongsTo('App\nama_guru_piket', 'piket_id');
}
