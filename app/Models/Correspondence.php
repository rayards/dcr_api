<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Correspondence extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['fileNumber', 'subject', 'filing_area_id', 'receivedFrom', 'correspondenceDate', 'dateReceived', 'comments'];

    public function FilingArea(): BelongsTo
    {
        return $this->belongsTo(FilingArea::class);
    }
}
