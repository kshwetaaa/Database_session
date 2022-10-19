<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    use HasFactory;

    protected $fillable = ['parts_id', 'validity', 'rate', 'mechanism_id'];

    public function user(){
        return $this->belongsTo(Mechanism::class, 'mechanism_id');
    }
}
