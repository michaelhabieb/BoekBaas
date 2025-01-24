<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Statistics extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'active_users_count',
        'borrowed_books_count',
        'most_read_genres',
        'last_updated',
    ];

    protected $casts = [
        'last_updated' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
