<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteCandidate extends Model
{
    public function vote()
    {
        return $this->belongsTo(Vote::class, 'vote_id', 'id');
    }

    // 🔹 Relasi ke User (Setiap kandidat adalah seorang user)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
