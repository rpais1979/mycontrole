 <?php 
session_start();
require_once("vendor/autoload.php");


use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);
	
require_once("controller/site.php");
//Usuários
require_once("controller/admin.php");
require_once("controller/admin-users.php");
require_once("controller/contacttypes.php");
require_once("controller/categories.php");
require_once("controller/tipodeclientes.php");
require_once("controller/tipodeenderecos.php");
require_once("controller/tipodecontatos.php");
//Cadastro Financeiro
require_once("controller/formadepagamentos.php");
require_once("controller/centrodecustos.php");
require_once("controller/financeirocategorias.php");
require_once("controller/financeirobancos.php");
require_once("controller/financeirocontasbancarias.php");
require_once("controller/contasfinanceiras.php");
require_once("controller/contasapagar.php");
require_once("controller/contasareceber.php");
require_once("controller/transferencias.php");
//require_once("controller/financeirobancos.php");
//Cadastro de Cliente
require_once("controller/cliente.php");
//Cadastro Transportadoras
require_once("controller/transportadoras.php");
//Cadastro Fornecedor
require_once("controller/fornecedores.php");
//Cadastro Produtos
require_once("controller/produtos.php");
//Correios
require_once("controller/correios.php");
//Vendas
require_once("controller/vendas.php");
//Funcionários
require_once("controller/funcionarioS.php");

$app->run();

?>