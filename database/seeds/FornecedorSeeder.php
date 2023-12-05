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
        //instanciando o objeto
//        $fornecedor = new Fornecedor();
//        $fornecedor->nome = 'Fornecedor 100';
//        $fornecedor->site = 'fornecedor100.com.br';
//        $fornecedor->uf = 'CE';
//        $fornecedor->email = 'contato@fornecedor100.com.br';
//        $fornecedor->save();

        factory(Fornecedor::class, 100)->create();

        //o método create (atenção para o atributo fillable da classe)
//        Fornecedor::create([
//            'nome' => 'Fornecedor 200',
//            'site' => 'fornecedor200.com.br',
//            'uf' => 'RS',
//            'email' => 'contato@fornecedor200.com.br'
//        ]);
//
//        Fornecedor::create([
//            'nome' => 'Ricardo joias',
//            'site' => 'ricardojoias.com.br',
//            'uf' => 'RS',
//            'email' => 'contato@ricardojoias.com.br'
//        ]);
//
//        Fornecedor::create([
//            'nome' => 'Riana Beach',
//            'site' => 'rianebeach.com.br',
//            'uf' => 'RS',
//            'email' => 'contato@rianebeach.com.br'
//        ]);
//
//        Fornecedor::create([
//            'nome' => 'Isabela Bonecas',
//            'site' => 'isabelabonecas.com.br',
//            'uf' => 'RS',
//            'email' => 'contato@isabelabonecas.com.br'
//        ]);
//
//        Fornecedor::create([
//            'nome' => 'Mariangela Veiculos',
//            'site' => 'mariangelaveiculos.com.br',
//            'uf' => 'RS',
//            'email' => 'contato@mariangelaveiculos.com.br'
//        ]);

        //insert
//        DB::table('fornecedores')->insert([
//            'nome' => 'Fornecedor 300',
//            'site' => 'fornecedor300.com.br',
//            'uf' => 'SP',
//            'email' => 'contato@fornecedor300.com.br'
//        ]);
    }
}
