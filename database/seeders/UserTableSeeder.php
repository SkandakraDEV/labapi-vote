<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        $user = [
            [
                "id"=>1,
                "name"=>"John Doe",
                "email"=>"user1@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password1"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>2,
                "name"=>"Jane Smith",
                "email"=>"user2@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password2"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>3,
                "name"=>"Michael Johnson",
                "email"=>"user3@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password3"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>4,
                "name"=>"Emily Davis",
                "email"=>"user4@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password4"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>"vote1.jpg"
            ],
            [
                "id"=>5,
                "name"=>"William Wilson",
                "email"=>"user5@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password5"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>"vote2.jpg"
            ],
            [
                "id"=>6,
                "name"=>"Olivia Martinez",
                "email"=>"user6@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password6"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>7,
                "name"=>"James Anderson",
                "email"=>"user7@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password7"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>8,
                "name"=>"Sophia Taylor",
                "email"=>"user8@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password8"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>"vote3.jpg"
            ],
            [
                "id"=>9,
                "name"=>"Benjamin Thomas",
                "email"=>"user9@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password9"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>"vote4.jpg"
            ],
            [
                "id"=>10,
                "name"=>"Emma Hernandez",
                "email"=>"user10@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password10"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>11,
                "name"=>"Alexander Moore",
                "email"=>"user11@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password11"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>"vote5.jpg"
            ],
            [
                "id"=>12,
                "name"=>"Mia Lee",
                "email"=>"user12@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password12"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>13,
                "name"=>"Ethan Walker",
                "email"=>"user13@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password13"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>"vote6.jpg"
            ],
            [
                "id"=>14,
                "name"=>"Ava Perez",
                "email"=>"user14@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password14"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>15,
                "name"=>"Michael Hill",
                "email"=>"user15@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password15"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>"vote7.jpg"
            ],
            [
                "id"=>16,
                "name"=>"Isabella Scott",
                "email"=>"user16@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password16"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>17,
                "name"=>"Daniel Green",
                "email"=>"user17@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password17"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>18,
                "name"=>"Camila Adams",
                "email"=>"user18@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password18"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>19,
                "name"=>"Matthew Baker",
                "email"=>"user19@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password19"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>20,
                "name"=>"Charlotte Campbell",
                "email"=>"user20@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password20"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>"vote8.jpg"
            ],
            [
                "id"=>21,
                "name"=>"Aiden Rivera",
                "email"=>"user21@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password21"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>22,
                "name"=>"Luna Nguyen",
                "email"=>"user22@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password22"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>"vote9.jpg"
            ],
            [
                "id"=>23,
                "name"=>"David Mitchell",
                "email"=>"user23@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password23"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>24,
                "name"=>"Ella Gray",
                "email"=>"user24@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password24"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>25,
                "name"=>"Logan Carter",
                "email"=>"user25@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password25"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>"vote10.jpg"
            ],
            [
                "id"=>26,
                "name"=>"Avery James",
                "email"=>"user26@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password26"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>27,
                "name"=>"Jackson Perez",
                "email"=>"user27@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password27"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>28,
                "name"=>"Amelia Evans",
                "email"=>"user28@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password28"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>29,
                "name"=>"Joseph Torres",
                "email"=>"user29@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password29"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>30,
                "name"=>"Harper Diaz",
                "email"=>"user30@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password30"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>31,
                "name"=>"Samuel Wright",
                "email"=>"user31@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password31"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>32,
                "name"=>"Evelyn Lopez",
                "email"=>"user32@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password32"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>33,
                "name"=>"Gabriel Hill",
                "email"=>"user33@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password33"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>34,
                "name"=>"Sofia Murphy",
                "email"=>"user34@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password34"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>35,
                "name"=>"Dylan Nelson",
                "email"=>"user35@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password35"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>36,
                "name"=>"Victoria King",
                "email"=>"user36@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password36"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>37,
                "name"=>"Carter Ward",
                "email"=>"user37@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password37"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>38,
                "name"=>"Madison Powell",
                "email"=>"user38@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password38"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>"vote11.jpg"
            ],
            [
                "id"=>39,
                "name"=>"Ryan Wright",
                "email"=>"user39@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password39"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>40,
                "name"=>"Chloe Wood",
                "email"=>"user40@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password40"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>41,
                "name"=>"Nathan Price",
                "email"=>"user41@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password41"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>42,
                "name"=>"Zoe Cooper",
                "email"=>"user42@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password42"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>43,
                "name"=>"Christian Rivera",
                "email"=>"user43@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password43"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>44,
                "name"=>"Penelope Ward",
                "email"=>"user44@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password44"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>45,
                "name"=>"Isaac Bell",
                "email"=>"user45@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password45"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>46,
                "name"=>"Hannah Diaz",
                "email"=>"user46@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password46"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>47,
                "name"=>"Liam Bailey",
                "email"=>"user47@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password47"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>48,
                "name"=>"Aria Rivera",
                "email"=>"user48@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password48"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>49,
                "name"=>"Lucas Parker",
                "email"=>"user49@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password49"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>50,
                "name"=>"Grace Kelly",
                "email"=>"user50@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password50"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>51,
                "name"=>"Mason Murphy",
                "email"=>"user51@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password51"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>52,
                "name"=>"Aubrey Powell",
                "email"=>"user52@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password52"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>53,
                "name"=>"Henry Wright",
                "email"=>"user53@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password53"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>54,
                "name"=>"Stella Evans",
                "email"=>"user54@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password54"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>55,
                "name"=>"Sebastian Turner",
                "email"=>"user55@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password55"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>56,
                "name"=>"Aurora Baker",
                "email"=>"user56@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password56"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>57,
                "name"=>"Wyatt Reed",
                "email"=>"user57@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password57"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>58,
                "name"=>"Leah Cook",
                "email"=>"user58@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password58"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>1,
                "photo"=>null
            ],
            [
                "id"=>59,
                "name"=>"Hunter Bell",
                "email"=>"user59@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password59"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>2,
                "photo"=>null
            ],
            [
                "id"=>60,
                "name"=>"Nova Garcia",
                "email"=>"user60@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password60"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>61,
                "name"=>"Charisa",
                "email"=>"user61@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password61"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>62,
                "name"=>"Agung",
                "email"=>"user62@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password62"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>63,
                "name"=>"Arofi",
                "email"=>"user63@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password63"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ],
            [
                "id"=>64,
                "name"=>"Wisnu",
                "email"=>"user64@example.com",
                "email_verified_at"=>null,
                "password"=>Hash::make("password64"),
                "created_at"=>null,
                "updated_at"=>null,
                "division_id"=>3,
                "photo"=>null
            ]
            ];
        User::insert($user);
    }
}
