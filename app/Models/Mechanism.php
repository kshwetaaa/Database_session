<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanism extends Model
{
    use HasFactory;

    protected $fillable = ['mechanism_id', 'name','number','machine_id', 'parts_id'];

    public function machine(){
        return $this->hasOne(Machine::class );
    }

    public function parts(){

        return $this->hasMany(Parts::class);
    }
}

