<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Batch extends Pivot
{
    protected $table = 'batches';
}
