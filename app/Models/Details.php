<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Details extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'featured_homepage',
        'about',
        'website',
        'lattes',
        'linkedin',
        'github',
        'facebook',
        'twitter',
        'instagram',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
