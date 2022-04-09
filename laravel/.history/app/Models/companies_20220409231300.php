<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;


    public function jobs(){
        return $this->hasMany(Product::class,'user_id');
    }
}
