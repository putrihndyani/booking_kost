<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataKamar extends Model
{
    use HasFactory;
    public function tipekamar(): BelongsTo
    {
        return $this->belongsTo(TipeKamar::class, 'id_tipekamar');
    }
}
