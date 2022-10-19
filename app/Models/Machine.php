<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = ['machine_id', 'machine_name', 'machine_number', 'mechanism_id'];

    public function user(){
        return $this->belongsTo(Mechanism::class, 'mechanism_id');
    }


}
