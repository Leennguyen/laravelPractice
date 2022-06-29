<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producer;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable =['name_car','price'];
    public function producer(){
        return $this->belongsTo(Producer::class,'producer_id','id');
    }
}

