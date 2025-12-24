<?php

namespace App\Models;

use App\Enums\Mode;
use Database\Factories\CyclingFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cycling extends Model
{
    /** @use HasFactory<CyclingFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'date',
        'time',
        'weight',
        'mode',
        'intensity',
        'speed',
        'distance',
        'watts',
        'mets',
        'ttl',
        'act',
        'watch_cadence',
        'watch_rest_energy',
        'watch_heart_rate',
        'watch_cycling_power',
        'watch_cycling_speed',
        'watch_cycling_distance',
        'watch_active_energy',
        'watch_met_values',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date' => 'date',
            'mode' => Mode::class,
        ];
    }
}
