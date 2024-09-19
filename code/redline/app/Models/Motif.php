<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motif extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected function casts(): array{
        return[
            'is_accessible_worker' => 'boolean',
        ];
    }
}
