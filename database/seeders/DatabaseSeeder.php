<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public static array $seeders = [];

    public function run()
    {
        foreach (self::$seeders as $seeder) {
            $this->call($seeder);
        }

        // \App\Models\User::factory(10)->create();
    }
}
