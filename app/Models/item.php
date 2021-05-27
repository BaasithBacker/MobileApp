<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\category','cid');
    }
    public function brand(){
        return $this->belongsTo('App\Models\brand','bid');
    }
}
