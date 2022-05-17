<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AlloggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('alloggi')->insert([
            'città' => Str::random(10),
            'CAP' => rand(10000,99999),
            'indirizzo' => Str::random(15),
            'numero'=> rand(1,999),
            'prezzo'=> mt_rand() / mt_getrandmax()*500+100,
            'descrizione' => Str::random(150),
            'superficie' => mt_rand() / mt_getrandmax()*100+50,
            'letti' => rand(1,3),
            'opzionato'=>rand(0,1),
            'isPostoletto'=>rand(0,1),
            

        ]);
    }
}
