<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ########################################
        #######       CATEGORIAS     #############
        
        #TIPOS DE CATEGORIAS.
        $arrayCategorias [0] = "Móveis";
        $arrayCategorias [1] = "Eletrodomésticos";
        $arrayCategorias [2] = "Celulares";
        $arrayCategorias [3] = "Brinquedos";
        
        foreach ($arrayCategorias as $cat) {
        $categoria = new App\Categoria();
        $categoria->nomcat = $cat;
        
        $categoria->save();}
        
        ########################################
        #######       CLIENTES     #############
        
        #CLIENTE 1
        $arrayClientes [0]['nome'] = "Amanda Vitória";
        $arrayClientes [0]['cpf'] = 12365898762;
        $arrayClientes [0] ['endereco'] = "Rua: Afonso Belli";
        $arrayClientes [0] ['numero'] = 555;
        $arrayClientes [0] ['bairro'] = "Limoeiro";
        $arrayClientes [0] ['cidade'] = "Brusque";
        $arrayClientes [0] ['uf'] = "Santa Catarina";
        $arrayClientes [0] ['telefone'] = 47991440362;
        
        #CLIENTE 2
        $arrayClientes [1]['nome'] = "Manoel Pereira";
        $arrayClientes [1]['cpf'] = 12305626699;
        $arrayClientes [1] ['endereco'] = "Rua:Catarina Staack";
        $arrayClientes [1] ['numero'] = 652;
        $arrayClientes [1] ['bairro'] = "Santa Terezinha";
        $arrayClientes [1] ['cidade'] = "Brusque";
        $arrayClientes [1] ['uf'] = "Santa Catarina";
        $arrayClientes [1] ['telefone'] = 47995658411;
        
        #CLIENTE 3
        $arrayClientes [2]['nome'] = "Pedro Henrique";
        $arrayClientes [2]['cpf'] = 12654589632;
        $arrayClientes [2] ['endereco'] = "Rua: 15 de novembro";
        $arrayClientes [2] ['numero'] = 444;
        $arrayClientes [2] ['bairro'] = "Itoupava";
        $arrayClientes [2] ['cidade'] = "Blumenal";
        $arrayClientes [2] ['uf'] = "Santa Catarina";
        $arrayClientes [2] ['telefone'] = 47965653212;
    
        foreach ($arrayClientes as $cli){
        $cliente = new App\Cliente();
        $cliente->nomcli = $cli ['nome'];
        $cliente->cpfcli = $cli ['cpf'];
        $cliente->endcli = $cli ['endereco'];
        $cliente->numcli = $cli ['numero'];
        $cliente->baicli = $cli ['bairro'];
        $cliente->cidcli = $cli ['cidade'];
        $cliente->ufcli = $cli ['uf'];
        $cliente->telcli = $cli ['telefone'];
        
        $cliente->save();}
        #########################################
        
        ########################################
        #######       PRODUTOS     #############
        
        # PRODUTO 1   'cat 0'
        $arrayProdutos [0] ['nomeProduto'] = "Cama Box";
        $arrayProdutos [0] ['descricaoProduto'] = "Cama box com molas ensacadas";
        $arrayProdutos [0] ['valorProduto'] = 1962.36;
        $arrayProdutos [0] ['categoria'] = 1;
        
        ####################################################################
        
        # PRODUTO 1   'cat 1'
        $arrayProdutos [1] ['nomeProduto'] = "Geladeira";
        $arrayProdutos [1] ['descricaoProduto'] = "Geladeira Brastemp 3200 litros frost free Degelo seco";
        $arrayProdutos [1] ['valorProduto'] = 3200;
        $arrayProdutos [1] ['categoria'] = 2;
        
        # PRODUTO 2   'cat 1'
        $arrayProdutos [3] ['nomeProduto'] = "Televisão";
        $arrayProdutos [3] ['descricaoProduto'] = "Smartv lg slim 40 polegadas com conversor digital integrado ";
        $arrayProdutos [3] ['valorProduto'] = 2600.00;
        $arrayProdutos [3] ['categoria'] = 2;
        
         ####################################################################
        
        # PRODUTO 1   'cat 2'
        $arrayProdutos [2] ['nomeProduto'] = "Celular Samsung a10";
        $arrayProdutos [2] ['descricaoProduto'] = "Tela infinita de 6.2, Processador octa_core, 32 gb";
        $arrayProdutos [2] ['valorProduto'] = 730.00;
        $arrayProdutos [2] ['categoria'] = 3;
        
        # PRODUTO 2   'cat 2'
        $arrayProdutos [4] ['nomeProduto'] = "celular lg k10";
        $arrayProdutos [4] ['descricaoProduto'] = "Tela 5.7 dual chip, camêra de 13mp";
        $arrayProdutos [4] ['valorProduto'] = 600.00;
        $arrayProdutos [4] ['categoria'] = 3;
        
        foreach ($arrayProdutos as $prod){
        $produto = new App\Produto();
        $produto->codcat = $prod ['categoria'];
        $produto->nompro = $prod ['nomeProduto'];
        $produto->despro = $prod ['descricaoProduto'];
        $produto->vlrpro = $prod ['valorProduto'];
       
        $produto->save();}
        #########################################
        
        
        
    }
}
