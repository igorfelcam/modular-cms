<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PagesTableSeeder::class);
        $this->call(TypeModulesTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(ComponentsTableSeeder::class);
    }
}
