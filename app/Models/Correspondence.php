<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Correspondence extends Model
{
    use SoftDeletes;

    protected $fillable = ['file_number', 'subject', 'filing_area_id', 'received_from', 'correspondence_date', 'date_received', 'date_sent', 'comments', 'flagged', 'user_id', 'creator_department_id'];

    public function filing_area(): BelongsTo
    {
        return $this->belongsTo(FilingArea::class);
    }
}
