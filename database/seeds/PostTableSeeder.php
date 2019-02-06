<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Título 1',
            'body' => 'Contenido del post #1',
        ]);

        DB::table('posts')->insert([
            'title' => 'Título 2',
            'body' => 'Contenido del post #2',
        ]);

        DB::table('posts')->insert([
            'title' => 'Título 3',
            'body' => 'Contenido del post #3',
        ]);
    }
}
