<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run() {

        DB::table('alloggi')->insert([
            ['citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 21, 'prezzo' => 270.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 60,'letti' => 3,'opzionato' => 0,'tipologia'=> 0,'locatore' => 1],
            ['citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 22, 'prezzo' => 260.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 55,'letti' => 2,'opzionato' => 0,'tipologia'=> 0,'locatore' => 1],
            ['citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 23, 'prezzo' => 265.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 58,'letti' => 3,'opzionato' => 0,'tipologia'=> 0,'locatore' => 1]
        ]);
        

        DB::table('servizi')->insert([
            ['nome' => 'Parcheggio'],
            ['nome' => 'Piscina'],
            ['nome' => 'Cucina completa'],
            ['nome' => 'Lavatrice'],
            ['nome' => 'Asciugatrice'],
            ['nome' => 'Animali domestici'],
            ['nome' => 'Riscladamento'],
            ['nome' => 'Cortile'],
            ['nome' => 'WI-FI'],
            ['nome' => 'TV'],
            ['nome' => 'Ferro da stiro'],
            ['nome' => 'Allarme antincendio'],
            ['nome' => 'Rilevatore monossido di carbonio'],
            ['nome' => 'Aria condizionata'],
        ]);
        
        DB::table('foto')->insert([
        ['immagine' => '20190116172824-8.jpeg'],
        ['immagine' => '20210505102417-4.jpg'],
        ['immagine' =>'AM1506.jpg']
        ]);
        
        DB::table('messaggi')->insert([
            ['contenuto' => 'Ciao ti scrivo per poter avere ulteriori informazioni sull\'appartamento' , 'data' => '2022-05-10 13:22:11' , 'mittente' => 1 , 'destinatario' => 2],
            ['contenuto' => 'Ciao cosa vorresti sapere di preciso?' , 'data' => '2022-05-10 13:25:32' , 'mittente' => 2 , 'destinatario' => 1],
            ['contenuto' => 'Mi piacerebbe sapere se è possibile visitarlo domani nel pomeriggio' , 'data' => '2022-05-10 19:21:11' , 'mittente' => 1 , 'destinatario' => 2],
        ]);
        
        DB::table('faq')->insert([
            ['domanda' => 'Come posso effettuare la registrazione al sito', 'risposta' => 'In alto a destra nella home page troverai diversi pulsanti, clicca su quello che riporta la parola \'SignUp\''],
            ['domanda' => 'Come posso mettere in affitto un appartamento', 'risposta' => 'Per mettere in affitto un appartamneto devi prima registrarti al sito come locatore e compilare una semplice form'],
        ]);
        
        DB::table('contratto')->insert([
            ['dataInizio' => '2022-05-11' ,'dataFine' => '2023-05-11' , 'locatario' => 2, 'alloggio' => 0]            
        ]);
                
        DB::table('incluso')->insert([
            ['alloggio' => 1, 'servizio' =>1],
            ['alloggio' => 1, 'servizio' =>2],
            ['alloggio' => 1, 'servizio' =>3],
            ['alloggio' => 1, 'servizio' =>4],
            ['alloggio' => 1, 'servizio' =>5],
            ['alloggio' => 1, 'servizio' =>6]            
        ]);
           

        DB::table('user')->insert([
            ['nome' => 'Admin', 'cognome' => 'Admin', 'email' => 'admin.admin@unirent.it', 'password' => Hash::make('admin'), 'cellulare' => 3661147223, 'livello' => 0],
            ['nome' => 'Locatore', 'cognome' => 'Locatore', 'email' => 'locatore.locatore@unirent.it', 'password' => Hash::make('locatore'), 'cellulare' => 3214467523, 'livello' => 1],
            ['nome' => 'Locatario', 'cognome' => 'Locatario', 'email' => 'locatario.locatario@unirent.it', 'password' => Hash::make('locatario'), 'cellulare' => 3009978543, 'livello' => 2]
        ]);
    }

}