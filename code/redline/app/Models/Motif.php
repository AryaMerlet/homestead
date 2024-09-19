<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motif extends Model
{
    use HasFactory;

    protected function casts(): array{
        return[
            'is_accessible_worker' => 'boolean',
        ];
    }
}
