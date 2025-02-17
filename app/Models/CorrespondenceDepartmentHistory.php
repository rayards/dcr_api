<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorrespondenceDepartmentHistory extends Model
{
    use SoftDeletes;

    protected $fillable = ['correspondence_id', 'department_id', 'start_date', 'end_date'];

    public function correspondence()
    {
        return $this->belongsTo(Correspondence::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
