<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //table
    protected $table = 'artikel';
    //field dalam table
    protected $fillable = ['user_id','judul','isi','tanggal'];
    public function tags()
    {
        //membuat relasi
    	return $this->hasMany(Tags::class);
    }
}
