<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mlk\User\Models\User;

class DatabaseSeeder extends Seeder
{
    public static array $seeders = [];

    public function run()
    {
        foreach (self::$seeders as $seeder) {
            $this->call($seeder);
        }

         User::factory(10)->create();
    }
}
