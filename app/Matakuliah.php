<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'kode_matakuliah';
    protected $fillable = ['kode_matakuliah', 'nama_matakuliah', 'sks', 'semester'];
    protected $guarded = [];
}
