<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //table
    protected $table = 'tags';
    //field dalam table
    protected $fillable = ['artikel_id','tags'];

    public function artikel()
    {
        //membuat relasi 
    	return $this->belongsTo(Artikel::class);
    }
}
