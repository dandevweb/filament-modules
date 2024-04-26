<?php

namespace App\Models;

use App\Enums\ChargeStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => ChargeStatusEnum::class,
    ];
}
