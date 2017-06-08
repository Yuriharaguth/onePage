<?php

use Illuminate\Database\Seeder;

class headerSeeder extends Seeder
{

    public function run()
    {
        App\Header::truncate();

        $headers = [
            ['nome_site' => 'Kolus', 'frase_apresentacao' => 'Sem limites entre você e a tecnologia.']
        ];
        
        foreach($headers as $header)
        {
            App\Header::create($header)->save();
        }
    }
}
