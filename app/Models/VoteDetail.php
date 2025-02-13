<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VoteDetail extends Model
{
    public function voteCandidate(){
        return $this->belongsTo('VoteCandidate');
    }

    public function user(){
        return $this->belongsTo('User');
    }

    public function scopeIsChoose($query, $user_id, $vote_id){
        return $query->join('vote_candidates', 'vote_candidates.id','=','vote_details.vote_candidate_id')
                        ->join('votes', 'votes.id', '=', 'vote_candidates.vote_id')
                        ->where('vote_details.user_id', $user_id)
                        ->where('votes.id', $vote_id);
    }
}
