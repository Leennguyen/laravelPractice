<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Producer extends Model
{
    use HasFactory;
    protected $table = 'producers';
    protected $fillable = ['producer_name'];

    public function cars(){
        return $this->hasMany(Car::class,'producer_id','id');
    }
}
