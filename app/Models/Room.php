<?php

namespace App\Models;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }
}
