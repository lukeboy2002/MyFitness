<?php

namespace App\Models;

use App\Enums\Mode;
use Database\Factories\StairmasterFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stairmaster extends Model
{
    /** @use HasFactory<StairmasterFactory> */
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
        'watts',
        'mets',
        'ttl',
        'act',
        'stairs',
        'watch_stairs',
        'watch_steps',
        'watch_rest_energy',
        'watch_heart_rate',
        'watch_active_energy',
        'watch_met_values',
        'watch_rise_height',
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
