<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vote;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vote = [
            [
                "id"=> 1,
                "title"=> "Best Employee of January 2025",
                "description"=> "Welcome to the Employee of January 2025  voting! Celebrate outstanding dedication and achievement by casting your vote for the most deserving nominee.",
                "start_date"=> "2025-01-01",
                "end_date"=> "2025-01-31",
                "total_votes"=> 21,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 2,
                "title"=> "Best Employee in February 2025",
                "description"=> "Welcome to the Employee of February 2025 voting! Celebrate outstanding dedication and achievement by casting your vote for the most deserving nominee.",
                "start_date"=> "2025-02-01",
                "end_date"=> "2025-02-28",
                "total_votes"=> 45,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 3,
                "title"=> "Best Employee of the First Bimonthly Period of 2025",
                "description"=> "Welcome to the Employee of the First Two Months of 2025 voting! Celebrate outstanding dedication and achievement by casting your vote for the most deserving nominee.",
                "start_date"=> "2025-01-01",
                "end_date"=> "2025-02-28",
                "total_votes"=> 5,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 4,
                "title"=> "Best Employee of the Second Bimonthly Period of 2025",
                "description"=> "Welcome to the Employee of the First Quarter of 2025 voting! Celebrate outstanding dedication and achievement by casting your vote for the most deserving nominee.",
                "start_date"=> "2025-03-01",
                "end_date"=> "2025-04-30",
                "total_votes"=> 0,
                "created_at"=> null,
                "updated_at"=> null
            ]
            ];

        Vote::insert($vote);
    }
}
