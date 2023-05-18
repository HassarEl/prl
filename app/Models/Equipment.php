<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function room(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'equipment_rooms', 'equipment_id', 'room_id');
    }

}
