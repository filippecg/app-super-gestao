<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContato::create([
        //     'nome' => 'Robo de configuracao', 
        //     'telefone' => '(11) 2222-3333', 
        //     'email' => 'sistema@appgestao.com.br',
        //     'motivo_contato' => 1,
        //     'mensagem' => 'Criando a configuracao do BD.'
        // ]);

        factory(SiteContato::class, 100)->create();
    }
}
