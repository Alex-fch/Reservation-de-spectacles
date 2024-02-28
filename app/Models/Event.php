<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'comment',
        'date',
        'time',
        'generalNote',
        'numberPlaces',
        'numberReservedPlaces',
        'is_open',
    ];

    /**
     * The relationship between concertHall with event
     * 
     */
    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(ConcertHall::class);
    }

    /**
     * The relationship between event with show
     * 
     */
    public function shows(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }

    /**
     * The relationship between concertHall with event
     * 
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The relationship between concertHall with event
     * 
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
