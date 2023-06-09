<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentRoom extends Model
{
    use HasFactory;

    protected $table = 'equipment_rooms';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'equipment_is',
        'room_id',
        'quantite',
    ];
}
