<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $description
 * @property string $name
 * @property string|null $job
 * @property bool $is_accessible_worker
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Motif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Motif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Motif query()
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereIsAccessibleWorker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motif whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Motif extends Model
{
    use HasFactory;

    protected function casts(): array{
        return[
            'is_accessible_worker' => 'boolean',
        ];
    }
}
