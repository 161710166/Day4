<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piket extends Model
{
protected $table ='pikets';
protected $fillable = array('nama','hari');
}
