<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected $casts = [
        'toppings' => 'array'
    ];

    protected $hidden = [
        'user',
    ];

    protected $appends = [
        'chef',
        'last_updated',
    ];

    /**
     * Get the user that owns the Pizza
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getChefAttribute(): string
    {
        return $this->user->name;
    }

    public function getLastUpdatedAttribute(): string
    {
        return $this->updated_at->diffForHumans();
    }
}
