<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = [
            [
                "id" => 1,
                "name" => "Frontend",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 2,
                "name" => "Backend",
                "created_at" => null,
                "updated_at" => null,
            ],
            [
                "id" => 3,
                "name" => "UI/UX",
                "created_at" => null,
                "updated_at" => null,
            ],
            [
                "id" => 4,
                "name" => "Marketing",
                "created_at" => null,
                "updated_at" => null
              ]
            ];
        Division::insert($division);
        
    }
}
