<?php

use App\FrasesModelos;
use Illuminate\Database\Seeder;

class FrasesDiversasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FrasesModelos::Truncate();
        factory('App\FrasesModelos', 10)->create();
    }
}
