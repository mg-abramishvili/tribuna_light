<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
        [
            'title' => '1',
            'logo' => '/img/SNG_1-1-1.png',
        ],
        [
            'title' => '2',
            'logo' => '/img/SNG_1-4-1.png',
        ],
        [
            'title' => '3',
            'logo' => '/img/gif.gif',
        ],
        ]);
    }
}
