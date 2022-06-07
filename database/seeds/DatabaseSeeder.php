<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
Use Carbon\Carbon;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run() {

        DB::table('alloggi')->insert([
            ['titolo'=>'Bellissimo appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 21, 'prezzo' => 270.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 60,'letti_pl' => NULL,'letti_ap' => 3,'n_camere' => 3,'opzionato' => 0,'tipologia'=> 0,'locatore' => 2,'foto'=>'77561779.jpg','periodo_locazione' => 6,'eta_max'=>NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Stupendo posto letto','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 22, 'prezzo' => 260.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 55,'letti_pl' => 2,'letti_ap' => 2,'n_camere' => 1,'opzionato' => 1,'tipologia'=> 1,'locatore' => 2,'foto'=>'20210505102417-4.jpg','periodo_locazione' => 6,'eta_max'=>70, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Favoloso appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 23, 'prezzo' => 265.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 58,'letti_pl' => NULL,'letti_ap' => 3,'n_camere' => 2,'opzionato' => 1,'tipologia'=> 0,'locatore' => 2,'foto'=>'AM1506.jpg','periodo_locazione' => 12,'eta_max'=>30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Bellissimo appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 21, 'prezzo' => 270.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 60,'letti_pl' => NULL,'letti_ap' => 3,'n_camere' => 3,'opzionato' => 0,'tipologia'=> 0,'locatore' => 2,'foto'=>'77561779.jpg','periodo_locazione' => 6,'eta_max'=>45, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Stupendo appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 22, 'prezzo' => 260.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 55,'letti_pl' =>NULL,'letti_ap' => 2,'n_camere' => 2,'opzionato' => 0,'tipologia'=> 0,'locatore' => 2,'foto'=>'20210505102417-4.jpg','periodo_locazione' => 3,'eta_max'=>27, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Favoloso appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 23, 'prezzo' => 265.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 58,'letti_pl' => NULL,'letti_ap' => 3,'n_camere' => 3,'opzionato' => 0,'tipologia'=> 0,'locatore' => 2,'foto'=>'AM1506.jpg','periodo_locazione' => 3,'eta_max'=>25, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Bellissimo appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 21, 'prezzo' => 270.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 60,'letti_pl' => NULL,'letti_ap' => 3,'n_camere' => 3,'opzionato' => 0,'tipologia'=> 0,'locatore' => 2,'foto'=>'77561779.jpg','periodo_locazione' => 12,'eta_max'=>30, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Stupendo appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 22, 'prezzo' => 260.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 55,'letti_pl' => NULL,'letti_ap' => 2,'n_camere' => 2,'opzionato' => 1,'tipologia'=> 0,'locatore' => 2,'foto'=>'20210505102417-4.jpg','periodo_locazione' => 6,'eta_max'=>NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Favoloso appartamento','regione' => 'Marche','citta' => 'Ancona', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 23, 'prezzo' => 265.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 58,'letti_pl' => NULL,'letti_ap' => 3,'n_camere' => 1,'opzionato' => 0,'tipologia'=> 0,'locatore' => 2,'foto'=>'AM1506.jpg','periodo_locazione' => 3,'eta_max'=>50, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Bellissimo appartamento','regione' => 'Marche','citta' => 'Fermo', 'cap' => 63900, 'indirizzo' => 'Via Ludovio Einaudi', 'numero' => 10, 'prezzo' => 320.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 60,'letti_pl' => 2,'letti_ap' => 3,'n_camere' => 2,'opzionato' => 0,'tipologia'=> 1,'locatore' => 2,'foto'=>'77561779.jpg','periodo_locazione' => 12,'eta_max'=>35, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Stupendo appartamento','regione' => 'Marche','citta' => 'Amandola', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 22, 'prezzo' => 260.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 55,'letti_pl' => NULL,'letti_ap' => 2,'n_camere' => 1,'opzionato' => 1,'tipologia'=> 0,'locatore' => 2, 'foto' => NULL, 'periodo_locazione' =>6,'eta_max'=>NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['titolo'=>'Stupendo posto letto','regione' => 'Marche','citta' => 'Amandola', 'cap' => 60121, 'indirizzo' => 'Via Brecce Bianche', 'numero' => 22, 'prezzo' => 260.00 , 'descrizione' => 'Ampio appartamento a due passi dall\'università' ,'superficie' => 55,'letti_pl' => 2, 'letti_ap' => 5,'n_camere' => 3,'opzionato' => 0,'tipologia'=> 1,'locatore' => 2, 'foto' => NULL, 'periodo_locazione' =>6,'eta_max'=>45, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]

        ]);
        

        DB::table('servizi_vincoli')->insert([
            ['nome' => 'Parcheggio', 'tipologia' => 0],
            ['nome' => 'Piscina', 'tipologia' => 0],
            ['nome' => 'Cucina_Completa', 'tipologia' => 0],
            ['nome' => 'Lavatrice', 'tipologia' => 0],
            ['nome' => 'Asciugatrice', 'tipologia' => 0],
            ['nome' => 'Animali_Domestici', 'tipologia' => 0],
            ['nome' => 'Riscladamento', 'tipologia' => 0],
            ['nome' => 'Cortile', 'tipologia' => 0],
            ['nome' => 'WI-FI', 'tipologia' => 0],
            ['nome' => 'TV', 'tipologia' => 0],
            ['nome' => 'Ferro_da_Stiro', 'tipologia' => 0],
            ['nome' => 'Allarme_Antincendio', 'tipologia' => 0],
            ['nome' => 'Rilevatore_Monossido_Di_Carbonio', 'tipologia' => 0],
            ['nome' => 'Aria_Condizionata', 'tipologia' => 0],
            ['nome' => 'Locale_Ricreativo', 'tipologia' => 0],
            ['nome' => 'Angolo_Studio', 'tipologia' => 0],
            ['nome'=>'Solo Ragazzi', 'tipologia' => 1],
            ['nome'=>'Solo Ragazze', 'tipologia' => 1],
            ['nome'=>'Solo Matricole', 'tipologia' => 1],
            ['nome'=>'No Matricole', 'tipologia' => 1]
        ]);
       
        DB::table('messaggi')->insert([
            ['contenuto' => 'Ciao ti scrivo per poter avere ulteriori informazioni sull\'appartamento, vorrei sapere se bla bla bla vsdkdeo kdeo kd oke kcoe ck. Kdo dkaofk ao ckao caokcc aok okao kcoka okcoak ockaock oakco kao kcoak coka ockao koak coak coka ocko akc ?' , 'data' => '2022-05-10 13:22:11' , 'mittente' => 3 , 'destinatario' => 2, 'id_alloggio'=>1],
            ['contenuto' => 'Ciao cosa vorresti sapere di preciso? Vuoi denunziarmi? Fallo vedra iche ti succede. Ho degli avvocati migliori di quelli di Depp. Mi dovrai risarcire di 34 miliomi di euro. Fascista' , 'data' => '2022-05-10 13:25:32' , 'mittente' => 2 , 'destinatario' => 3,'id_alloggio'=>1],
            ['contenuto' => 'Mi piacerebbe sapere se è possibile visitarlo domani nel pomeriggio' , 'data' => '2022-05-09 19:21:11' , 'mittente' => 3 , 'destinatario' => 4,'id_alloggio'=>2],
            ['contenuto' => 'Ciao cosa vorresti sapere di preciso?' , 'data' => '2022-05-10 19:21:11' , 'mittente' => 4 , 'destinatario' => 5,'id_alloggio'=>1],
            ['contenuto' => 'Mi piacerebbe sapere se è possibile visitarlo domani nel pomeriggio' , 'data' => '2022-05-10 19:21:11' , 'mittente' => 4 , 'destinatario' => 5,'id_alloggio'=>3]
        ]);
        
        DB::table('faq')->insert([
            ['domanda' => 'Come posso effettuare la registrazione al sito?', 'risposta' => 'In alto a destra nella home page troverai diversi pulsanti, clicca su quello che riporta la parola \'Registrati\'.'],
            ['domanda' => 'Come posso mettere in affitto un appartamento?', 'risposta' => 'Per mettere in affitto un appartamneto devi prima registrarti al sito come locatore e compilare una semplice form.'],
            ['domanda' => 'Posso accordarmi direttamente con il locatore tramite il sito?', 'risposta' => 'Sì, effettuando l\'accesso e selezionando l\'appartamento interessato, sarà possibile avviare una chat con il locatore in questione attraverso il sito stesso.'],
            ['domanda' => 'Perché dovrei affidarmi a UniRent?', 'risposta' => 'Trovare casa in una nuova città non è mai facile. UniRent seleziona le migliori soluzioni, evitando il rischio di brutte esperienze e garantendo sempre un regolare contratto.'],  
            ['domanda' => 'Come funziona?', 'risposta' => 'Scegli tra le nostre offerte a seconda delle tue preferenze e delle tue necessità. '],
            ['domanda' => 'Quanto costa?', 'risposta' => 'Il servizio è completamente gratuito.'],
            ['domanda' => 'Posso offrire in affitto una sola stanza?', 'risposta' => 'Assecondiamo le tue richieste: puoi offrire in affitto tutta la casa o una sola camera. Un intero immobile o più appartamenti.'],
            ['domanda' => 'Dove vi trovo? Come vi contatto?', 'risposta' => 'Siamo raggiungibili via e-mail scrivendo a \'info@unirent.it\' oppure ai recapiti indicati nella pagina \'Contatti\' di questo sito.'],
            ['domanda' => 'Come posso effettuare un ricerca più adatta alle mie esigenze?', 'risposta' => 'Per usufruire del filtraggio nella ricerca dell\'appartamento/posto letto bisogna registrarsi al sito.']
            ]);
        
        DB::table('contratto')->insert([
            ['dataInizio' => '2022-05-11' ,'dataFine' => '2023-05-11' , 'locatario' => 2, 'alloggio' => 0]            
        ]);
                
        DB::table('incluso')->insert([
            ['alloggio' => 1, 'servizio_vincolo' =>1],
            ['alloggio' => 1, 'servizio_vincolo' =>3],
            ['alloggio' => 1, 'servizio_vincolo' =>2],
            ['alloggio' => 1, 'servizio_vincolo' =>4],
            ['alloggio' => 1, 'servizio_vincolo' =>5],
            ['alloggio' => 2, 'servizio_vincolo' =>7],
            ['alloggio' => 2, 'servizio_vincolo' =>2],
            ['alloggio' => 3, 'servizio_vincolo' =>8],
            ['alloggio' => 1, 'servizio_vincolo' =>19],
            ['alloggio' => 1, 'servizio_vincolo' =>21],
            ['alloggio' => 1, 'servizio_vincolo' =>15],
            ['alloggio' => 1, 'servizio_vincolo' =>14],
            ['alloggio' => 1, 'servizio_vincolo' =>13],
            ['alloggio' => 2, 'servizio_vincolo' =>12],
            ['alloggio' => 2, 'servizio_vincolo' =>11],
            ['alloggio' => 3, 'servizio_vincolo' =>10]               
        ]);
           

        DB::table('users')->insert([
            ['foto_profilo' => NULL, 'name' => 'Admin', 'cognome' => 'Admin', 'sesso' => 'Maschio', 'data_nascita' => Carbon::create('2000','01','01'), 'email' => 'admin.admin@unirent.it', 'username' => 'adminadmin', 'password' => Hash::make('noRX6VyF'), 'cellulare' => "3661147223", 'livello' => 0,'descrizione'=>'Admin del sito', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['foto_profilo' => NULL, 'name' => 'Locatore', 'cognome' => 'Locatore', 'sesso' => 'Maschio', 'data_nascita' => Carbon::create('2000','02','01'), 'email' => 'lore.locre@unirent.it', 'username' => 'lorelore', 'password' => Hash::make('noRX6VyF'), 'cellulare' => "3678823475", 'livello' => 1,'descrizione'=>'Locatore', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['foto_profilo' => NULL, 'name' => 'Locatario', 'cognome' => 'Locatario', 'sesso' => 'Maschio', 'data_nascita' => Carbon::create('2000','03','01'), 'email' => 'lario.lario@unirent.it', 'username' => 'lariolario', 'password' => Hash::make('noRX6VyF'), 'cellulare' => "3776640989", 'livello' => 2,'descrizione'=>'Locatario', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['foto_profilo' => NULL, 'name' => 'Pippo', 'cognome' => 'Baudo', 'sesso' => 'Maschio', 'data_nascita' => Carbon::create('2000','03','01'), 'email' => 'dario.dario@unirent.it', 'username' => 'pippo', 'password' => Hash::make('pippo'), 'cellulare' => "377645589", 'livello' => 2,'descrizione'=>'racazzo carino', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['foto_profilo' => NULL, 'name' => 'Federico', 'cognome' => 'Pretini', 'sesso' => 'Maschio', 'data_nascita' => Carbon::create('2000','07','06'), 'email' => 'federico.pretini@unirent.it', 'username' => 'fede_loca', 'password' => Hash::make('fede_loca'), 'cellulare' => "3661147561", 'livello' => 1,'descrizione'=>'racazzo carino', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['foto_profilo' => NULL, 'name' => 'Federico', 'cognome' => 'Pretini', 'sesso' => 'Maschio', 'data_nascita' => Carbon::create('2000','07','06'), 'email' => 'federico.pretini@unirent.it', 'username' => 'fede_lario', 'password' => Hash::make('fede_lario'), 'cellulare' => "3661147562", 'livello' => 2,'descrizione'=>'racazzo carino', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

        ]);
    }

}