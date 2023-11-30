<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autoris')->insert([
            'name' => 'Čapek',
            'year' => '1868-11-5',

        ]);

        DB::table('autoris')->insert([
            'name' => 'Němcová',
            'year' => '1859-11-5',

        ]);



        // \App\Models\User::factory(10)->create();
        DB::table('books')->insert([
            'name' => 'Bílá nemoc',
            'genre' => 'fantasy',
            'autor_id' => 1,
            'page_count' => 125,

        ]);

        DB::table('books')->insert([
            'name' => 'Krakatit',
            'genre' => 'fantasy',
            'autor_id' => 1,
            'page_count' => 240,

        ]);
        DB::table('books')->insert([
            'name' => 'Babička',
            'genre' => 'povídka',
            'autor_id' => 2,
            'page_count' => 300,

        ]);




    }
}
