<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VoteCandidate;

class VoteCandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vc = [
            [
                "id"=> 1,
                "vote_id"=> 1,
                "user_id"=> 4,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 2,
                "vote_id"=> 1,
                "user_id"=> 5,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 3,
                "vote_id"=> 1,
                "user_id"=> 8,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 4,
                "vote_id"=> 1,
                "user_id"=> 9,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 5,
                "vote_id"=> 2,
                "user_id"=> 11,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 6,
                "vote_id"=> 2,
                "user_id"=> 13,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 7,
                "vote_id"=> 2,
                "user_id"=> 15,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 8,
                "vote_id"=> 3,
                "user_id"=> 20,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 9,
                "vote_id"=> 3,
                "user_id"=> 22,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 10,
                "vote_id"=> 4,
                "user_id"=> 25,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 11,
                "vote_id"=> 4,
                "user_id"=> 38,
                "created_at"=> null,
                "updated_at"=> null
            ]
            ];
        VoteCandidate::insert($vc);
    }
}
