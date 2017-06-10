<?php

use Illuminate\Database\Seeder;

class ServicoImgSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        App\ServicoImg::truncate();

        $servicosImg = [
            ['servicoimg_titulo' => 'Kolus1', 'servicoimg_descricao' => 'Sem limites entre você e a tecnologia.',
                'servicoimg_foto' => 'img/portfolio/thumbnails/1.jpg'],
            ['servicoimg_titulo' => 'Kolus1', 'servicoimg_descricao' => 'Sem limites entre você e a tecnologia.',
                'servicoimg_foto' => 'img/portfolio/thumbnails/2.jpg'],
            ['servicoimg_titulo' => 'Kolus1', 'servicoimg_descricao' => 'Sem limites entre você e a tecnologia.',
                'servicoimg_foto' => 'img/portfolio/thumbnails/3.jpg'],
            ['servicoimg_titulo' => 'Kolus1', 'servicoimg_descricao' => 'Sem limites entre você e a tecnologia.',
                'servicoimg_foto' => 'img/portfolio/thumbnails/4.jpg'],
            ['servicoimg_titulo' => 'Kolus1', 'servicoimg_descricao' => 'Sem limites entre você e a tecnologia.',
                'servicoimg_foto' => 'img/portfolio/thumbnails/5.jpg'],
            ['servicoimg_titulo' => 'Kolus1', 'servicoimg_descricao' => 'Sem limites entre você e a tecnologia.',
                'servicoimg_foto' => 'img/portfolio/thumbnails/6.jpg'],
        ];
        
        foreach($servicosImg as $servico) {
            App\ServicoImg::create($servico)->save();
        }
    }
}
