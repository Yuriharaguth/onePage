<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

          $this->call(headerSeeder::class);
          $this->call(apresentacaoSeeder::class);
          $this->call(ServicoSeeder::class);
          $this->call(ContatoSeeder::class);

        Model::reguard();
    }
}
