<?php

namespace App\Models;

use App\Models\User;
use App\Models\Equipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function equipments(): BelongsToMany
    {
        return $this->belongsToMany(Equipment::class, 'equipment_rooms', 'equipment_id');
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'reservations', 'room_id', 'user_id');
    }
}

