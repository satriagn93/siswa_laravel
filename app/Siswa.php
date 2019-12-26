<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['npm','nama','jenis_kelamin','agama'];
}
