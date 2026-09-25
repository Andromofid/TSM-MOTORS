<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MotoImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'moto_id',
        'image',
        'position',
    ];

    public function moto(): BelongsTo
    {
        return $this->belongsTo(Moto::class);
    }
}
