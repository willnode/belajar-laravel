<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'title' => 'Data Engineer',
                'slug' => 'data-engineer',
                'description' => "Ngoding Python",
                'qualification' => "Bisa Ngoding Python",
                'location' => "Remote",
                'submit_deadline' => date('Y-m-d H:i:s', strtotime('+1 month')),
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Fullstack Web Engineer',
                'slug' => 'fullstack-web-engineer',
                'description' => "Ngoding Laravel",
                'qualification' => "Bisa Ngoding Laravel",
                'location' => "Remote",
                'submit_deadline' => date('Y-m-d H:i:s', strtotime('+1 month')),
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Backend Engineer',
                'slug' => 'backend-engineer',
                'description' => "Ngoding Java",
                'qualification' => "Bisa Ngoding Java",
                'location' => "Remote",
                'submit_deadline' => date('Y-m-d H:i:s', strtotime('+1 month')),
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Frontend Engineer',
                'slug' => 'frontend-engineer',
                'description' => "Ngoding Javascript",
                'qualification' => "Bisa Ngoding Javascript",
                'location' => "Remote",
                'submit_deadline' => date('Y-m-d H:i:s', strtotime('+1 month')),
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ]
        ];

        foreach ($data as $item) {
            DB::table('jobs')->insert($item);
        }
    }
}
