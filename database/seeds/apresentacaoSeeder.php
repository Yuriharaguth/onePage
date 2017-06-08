<?php

use Illuminate\Database\Seeder;

class apresentacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Apresentacao::truncate();

        $apresentacao = [
            ['frase_curta' => 'Nós temos o que você precisa!', 'frase_longa' => 'Somos uma agência digital, especializada em aplicações Web e mobile. Nosso foco é resolver o problema, com no menor tempo possível e com a maior qualidade.']
        ];
        
        foreach($apresentacao as $ap)
        {
            App\Apresentacao::create($ap)->save();
        }
    }
}
