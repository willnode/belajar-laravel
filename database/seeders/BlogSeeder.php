<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $data = [
            [
                'title' => 'Beep beep boop tu',
                'content' => "Blog pertama ini seru\nSangat seru",
                'slug' => 'beep-beep-boop-tu',
                'image' => 'https://picsum.photos/id/10/400/400',
                'author_id' => $id,
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Beep beep boop wa',
                'content' => "Blog kedua ini seru\nGokil seru!",
                'slug' => 'beep-beep-boop-wa',
                'image' => 'https://picsum.photos/id/20/400/400',
                'author_id' => $id,
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Beep beep boop ga',
                'content' => "Blog ketiga ini seruuuu\nGokil abiss!!",
                'slug' => 'beep-beep-boop-ga',
                'image' => 'https://picsum.photos/id/30/400/400',
                'author_id' => $id,
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Beep beep boop pat',
                'image' => 'https://picsum.photos/id/40/400/400',
                'slug' => 'beep-beep-boop-pat',
                'content' => "Blog keempat ini seruuuu\nAmpun dehh!!",
                'author_id' => $id,
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ]
        ];

        foreach ($data as $item) {
            DB::table('blogs')->insert($item);
        }
    }
}
