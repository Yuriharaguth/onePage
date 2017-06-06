<?php

use Illuminate\Database\Seeder;

class headerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Header::truncate();

        $headers = [
            ['nome_site' => 'Kolus', 'frase_apresentacao' => 'Sem limites entre você e a tecnolgia.']
        ];
        
        foreach($headers as $header)
        {
            App\Header::create($header)->save();
        }
    }
}
