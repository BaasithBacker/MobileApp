<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsTo('App\Models\item','proid');
    }
    public function customer(){
        return $this->belongsTo('App\Models\login','cid');
    }
}
