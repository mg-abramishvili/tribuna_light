<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backgrounds')->insert([
        [
            'title' => '1',
            'file' => '/img/01.jpg',
        ],
        [
            'title' => '2',
            'file' => '/img/02.jpg',
        ],
        [
            'title' => '3',
            'file' => '/img/03.jpg',
        ],
        [
            'title' => '4',
            'file' => '/img/04.jpg',
        ],
        ]);
    }
}
