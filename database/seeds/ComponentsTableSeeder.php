<?php

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('components')->insert([
            'module_id' => 1,
            'image'     => null,
            'link'      => null,
            'text'      => 'Text Test',
            'order'     => 0,
        ]);
        DB::table('components')->insert([
            'module_id' => 1,
            'image'     => 'default',
            'link'      => null,
            'text'      => null,
            'order'     => 1,
        ]);
        DB::table('components')->insert([
            'module_id' => 1,
            'image'     => null,
            'link'      => 'https://www.google.com/',
            'text'      => 'Link Google',
            'order'     => 2,
        ]);
    }
}
