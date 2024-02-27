<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Show extends Model
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
        'duration',
    ];

    /**
     * The relationship between show with artist
     * 
     */
    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }
}
