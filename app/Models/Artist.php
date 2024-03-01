<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'nickName',
        'comment',
    ];

    /**
     * The relationship between show with artist
     * 
     */
    public function shows(): BelongsToMany
    {
        return $this->belongsToMany(Show::class);
    }
}
