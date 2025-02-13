<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

    protected $hidden =[
        'created_at',
        'updated_at',
        'start_date',
        'end_date'

    ];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    protected $appends = ['period'];

    public function voteCandidates()
    {
        return $this->hasMany(VoteCandidate::class, 'vote_id', 'id');
    }

    public function getPeriodAttribute()
    {
        Carbon::setLocale('id');

        return $this->start_date->translatedFormat('d F Y') . ' - ' . $this->end_date->translatedFormat('d F Y');
    }

    public function scopeActive($query){
        return $query->where('start_date', '<=', Carbon::now())
                     ->where('end_date', '>=', Carbon::now());
    }

    public function scopeCheckActiveById($query, $id){
        return $query->active()->where('id', $id);
    }

}
