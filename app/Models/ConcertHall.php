<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ConcertHall extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'numberPlaces',
        'comment',
        'time',
        'adress_street',
    ];

    /**
     * The relationship between concertHall with event
     * 
     */
    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }

    /**
     * The relationship between concertHall with country
     * 
     */
    public function countries(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * The relationship between concertHall with country
     * 
     */
    public function cities(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
