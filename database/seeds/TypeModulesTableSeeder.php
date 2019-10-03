<?php

use Illuminate\Database\Seeder;

class TypeModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type_modules')->insert([
            'name'  => 'header',
        ]);
        DB::table('type_modules')->insert([
            'name'  => 'menu',
        ]);
        DB::table('type_modules')->insert([
            'name'  => 'banner',
        ]);
        DB::table('type_modules')->insert([
            'name'  => 'section',
        ]);
        DB::table('type_modules')->insert([
            'name'  => 'gallery',
        ]);
        DB::table('type_modules')->insert([
            'name'  => 'form',
        ]);
        DB::table('type_modules')->insert([
            'name'  => 'footer',
        ]);
    }
}
