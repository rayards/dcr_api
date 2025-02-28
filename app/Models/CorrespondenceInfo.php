<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorrespondenceInfo extends Model
{
    use SoftDeletes;

    protected $table = 'correspondences_info';
}
