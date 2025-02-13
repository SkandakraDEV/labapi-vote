<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VoteDetail;

class VoteDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vd = [
            [
                "id"=> 1,
                "vote_candidate_id"=> 1,
                "user_id"=> 1,
                "reason"=> "She dedication to their work is unparalleled, consistently going above and beyond what is expected.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 2,
                "vote_candidate_id"=> 1,
                "user_id"=> 3,
                "reason"=> "She demonstrate exceptional leadership skills, inspiring and guiding their colleagues to achieve their best.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 3,
                "vote_candidate_id"=> 1,
                "user_id"=> 5,
                "reason"=> "Her strong work ethic serves as a shining example to the entire team.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 4,
                "vote_candidate_id"=> 1,
                "user_id"=> 7,
                "reason"=> "She possess excellent problem-solving abilities, always finding innovative solutions to complex challenges.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 5,
                "vote_candidate_id"=> 1,
                "user_id"=> 9,
                "reason"=> "Her attention to detail ensures that every task they undertake is completed to the highest standard.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 6,
                "vote_candidate_id"=> 1,
                "user_id"=> 11,
                "reason"=> "She exhibit outstanding time management skills, effectively prioritizing tasks and meeting deadlines.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 7,
                "vote_candidate_id"=> 1,
                "user_id"=> 13,
                "reason"=> "Her positive attitude creates a motivating and uplifting atmosphere in the workplace.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 8,
                "vote_candidate_id"=> 1,
                "user_id"=> 15,
                "reason"=> "She is highly adaptable, thriving in fast-paced and ever-changing environments.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 9,
                "vote_candidate_id"=> 1,
                "user_id"=> 17,
                "reason"=> "She consistently seek feedback and strive for self-improvement, showing a commitment to personal and professional growth.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 10,
                "vote_candidate_id"=> 1,
                "user_id"=> 19,
                "reason"=> "She is dependable and reliable, colleagues can always count on them to deliver results.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 11,
                "vote_candidate_id"=> 1,
                "user_id"=> 21,
                "reason"=> "She communicate effectively with both colleagues and clients, fostering strong relationships built on trust and respect.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 12,
                "vote_candidate_id"=> 1,
                "user_id"=> 23,
                "reason"=> "She demonstrate a willingness to take on new challenges and responsibilities.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 13,
                "vote_candidate_id"=> 1,
                "user_id"=> 25,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 14,
                "vote_candidate_id"=> 1,
                "user_id"=> 25,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 15,
                "vote_candidate_id"=> 2,
                "user_id"=> 4,
                "reason"=> "He excel at collaboration, working seamlessly with others to achieve common goals.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 16,
                "vote_candidate_id"=> 2,
                "user_id"=> 8,
                "reason"=> "He take initiative and are proactive in identifying areas for improvement.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 17,
                "vote_candidate_id"=> 2,
                "user_id"=> 12,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 18,
                "vote_candidate_id"=> 2,
                "user_id"=> 16,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 19,
                "vote_candidate_id"=> 2,
                "user_id"=> 20,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 20,
                "vote_candidate_id"=> 2,
                "user_id"=> 24,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 21,
                "vote_candidate_id"=> 3,
                "user_id"=> 2,
                "reason"=> "She exhibit a high level of professionalism in all aspects of their work.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 22,
                "vote_candidate_id"=> 3,
                "user_id"=> 6,
                "reason"=> "She handle pressure with grace and composure, maintaining productivity even in challenging situations.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 23,
                "vote_candidate_id"=> 3,
                "user_id"=> 10,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 24,
                "vote_candidate_id"=> 3,
                "user_id"=> 14,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 25,
                "vote_candidate_id"=> 3,
                "user_id"=> 18,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 26,
                "vote_candidate_id"=> 3,
                "user_id"=> 22,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 27,
                "vote_candidate_id"=> 4,
                "user_id"=> 26,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 28,
                "vote_candidate_id"=> 4,
                "user_id"=> 27,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 29,
                "vote_candidate_id"=> 4,
                "user_id"=> 28,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 30,
                "vote_candidate_id"=> 5,
                "user_id"=> 1,
                "reason"=> "He possess excellent decision-making skills, consistently making sound judgments based on thorough analysis.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 31,
                "vote_candidate_id"=> 5,
                "user_id"=> 3,
                "reason"=> "He is highly knowledgeable in their field, continuously staying updated on industry trends and best practices.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 32,
                "vote_candidate_id"=> 5,
                "user_id"=> 5,
                "reason"=> "He is passionate about their work, bringing enthusiasm and energy to everything they do.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 33,
                "vote_candidate_id"=> 5,
                "user_id"=> 7,
                "reason"=> "He demonstrate empathy and understanding towards colleagues, creating a supportive and inclusive environment.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 34,
                "vote_candidate_id"=> 5,
                "user_id"=> 9,
                "reason"=> "He is resourceful, finding creative solutions to overcome obstacles.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 35,
                "vote_candidate_id"=> 5,
                "user_id"=> 11,
                "reason"=> "He show integrity and honesty in their actions, earning the trust and respect of those around them.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 36,
                "vote_candidate_id"=> 5,
                "user_id"=> 13,
                "reason"=> "He is results-oriented, focused on achieving measurable outcomes.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 37,
                "vote_candidate_id"=> 5,
                "user_id"=> 15,
                "reason"=> "He is resilient, bouncing back from setbacks with determination and perseverance.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 38,
                "vote_candidate_id"=> 5,
                "user_id"=> 17,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 39,
                "vote_candidate_id"=> 5,
                "user_id"=> 19,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 40,
                "vote_candidate_id"=> 5,
                "user_id"=> 21,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 41,
                "vote_candidate_id"=> 5,
                "user_id"=> 23,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 42,
                "vote_candidate_id"=> 5,
                "user_id"=> 25,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 43,
                "vote_candidate_id"=> 5,
                "user_id"=> 25,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 44,
                "vote_candidate_id"=> 5,
                "user_id"=> 4,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 45,
                "vote_candidate_id"=> 5,
                "user_id"=> 8,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 46,
                "vote_candidate_id"=> 5,
                "user_id"=> 12,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 47,
                "vote_candidate_id"=> 5,
                "user_id"=> 16,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 48,
                "vote_candidate_id"=> 5,
                "user_id"=> 20,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 49,
                "vote_candidate_id"=> 5,
                "user_id"=> 24,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 50,
                "vote_candidate_id"=> 6,
                "user_id"=> 2,
                "reason"=> "He is excellent mentors, providing guidance and support to junior members of the team.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 51,
                "vote_candidate_id"=> 6,
                "user_id"=> 6,
                "reason"=> "He show humility and are open to learning from others.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 52,
                "vote_candidate_id"=> 6,
                "user_id"=> 10,
                "reason"=> "He exhibit strong leadership potential, capable of taking on greater responsibilities in the future.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 53,
                "vote_candidate_id"=> 6,
                "user_id"=> 14,
                "reason"=> "He prioritize teamwork and cooperation, recognizing the value of collective effort.",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 54,
                "vote_candidate_id"=> 6,
                "user_id"=> 18,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 55,
                "vote_candidate_id"=> 6,
                "user_id"=> 22,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 56,
                "vote_candidate_id"=> 6,
                "user_id"=> 26,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 57,
                "vote_candidate_id"=> 6,
                "user_id"=> 27,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 58,
                "vote_candidate_id"=> 6,
                "user_id"=> 28,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 59,
                "vote_candidate_id"=> 6,
                "user_id"=> 30,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 60,
                "vote_candidate_id"=> 6,
                "user_id"=> 31,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 61,
                "vote_candidate_id"=> 6,
                "user_id"=> 32,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 62,
                "vote_candidate_id"=> 6,
                "user_id"=> 33,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 63,
                "vote_candidate_id"=> 6,
                "user_id"=> 34,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 64,
                "vote_candidate_id"=> 6,
                "user_id"=> 35,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 65,
                "vote_candidate_id"=> 6,
                "user_id"=> 36,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 66,
                "vote_candidate_id"=> 7,
                "user_id"=> 37,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 67,
                "vote_candidate_id"=> 7,
                "user_id"=> 38,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 68,
                "vote_candidate_id"=> 7,
                "user_id"=> 39,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 69,
                "vote_candidate_id"=> 7,
                "user_id"=> 40,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 70,
                "vote_candidate_id"=> 7,
                "user_id"=> 41,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 71,
                "vote_candidate_id"=> 7,
                "user_id"=> 42,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 72,
                "vote_candidate_id"=> 7,
                "user_id"=> 43,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 73,
                "vote_candidate_id"=> 7,
                "user_id"=> 44,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 74,
                "vote_candidate_id"=> 7,
                "user_id"=> 45,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 75,
                "vote_candidate_id"=> 8,
                "user_id"=> 1,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 76,
                "vote_candidate_id"=> 8,
                "user_id"=> 2,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 77,
                "vote_candidate_id"=> 8,
                "user_id"=> 3,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 78,
                "vote_candidate_id"=> 8,
                "user_id"=> 4,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 79,
                "vote_candidate_id"=> 8,
                "user_id"=> 5,
                "reason"=> null,
                "created_at"=> null,
                "updated_at"=> null
            ]
            ];
        VoteDetail::insert($vd);
    }
}
