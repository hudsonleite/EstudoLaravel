<?php

use App\Postagem;
use Illuminate\Database\Seeder;

class PostagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postagem::truncate();
        factory(Postagem::class, 15)->create();
    }
}
