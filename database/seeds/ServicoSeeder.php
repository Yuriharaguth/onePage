<?php

use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\Servico::truncate();

        $Servicos = [
            ['nome_servico' => 'Kolus1', 'descricao_servico' => 'Sem limites entre você e a tecnologia.'],
            ['nome_servico' => 'Kolus2', 'descricao_servico' => 'Sem limites entre você e a tecnologia.'],
            ['nome_servico' => 'Kolus3', 'descricao_servico' => 'Sem limites entre você e a tecnologia.'],
            ['nome_servico' => 'Kolus4', 'descricao_servico' => 'Sem limites entre você e a tecnologia.']
        ];
        
        foreach($Servicos as $servico) {
            App\Servico::create($servico)->save();
        }

    }
}
