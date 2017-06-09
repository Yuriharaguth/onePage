<?php

use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder {

    public function run() {
        App\Contato::truncate();

        $contato = [
            [
                'contato_titulo' => 'Kolus', 'contato_mensagem' => 'Sem limites entre você e a tecnologia.',
                'contato_email' => 'contato@contato.com', 'contato_tel' => '(43) 3356-8952'
            ]
        ];
        
        foreach($contato as $cont) {
            App\Contato::create($cont)->save();
        }
    }
}
