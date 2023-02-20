<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->uf = 'BA';
        $fornecedor->site = 'www.site.com.br';
        $fornecedor->email = 'email@site.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'uf' => 'MG',
            'site' => 'www.outrosite.com.br',
            'email' => 'outroemail@email.com.br'
        ]);
    }
}
