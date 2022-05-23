<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\AkunSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            AkunSeeder::class
        ]);
    }
}
