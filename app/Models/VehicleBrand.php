<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBrand extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'vehicle_brands';

    public function vehicleModel()
    {
        return $this->hasMany(VehicleModel::class);
    }
}
