<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'vehicle_models';

    public function vehicleBrand(): BelongsTo
    {
        return $this->belongsTo(VehicleBrand::class);
    }
}
