<?php echo "Hello world!"; 

echo "<br>";

$nome = "Felipe";

// -------------- AULA 18/08 -----------

/* 
	Comentário em bloco
*/

//Comentário em linhas

echo $nome;
echo "<br>";
unset($nome); //Comando que pode limpar várias variáveis de uma vez só
isset($nome); //Comando usado juntamente com uma estrutura condicional. Exemplo:

if (isset($nome)) {
	echo "Foi definida";
} else {
	echo "Não foi definida.";
}

$nome = "Felipe";
$sobrenome = "Alencar";

$nomeCompleto = $nome . " " . $sobrenome; // Concatenação em PHP é feita através de ponto final.

echo $nomeCompleto;

/* TIPOS DE DADOS */
//// Básico

// String
$nome = "Felipe";
$ano = 1999;
// Ponto flutuante
$salario = 1600.00;
// Boolean 
$acesso = false;

////Composto

// Array
$numeros = array("1", "2", "3", "4");
echo $numeros[3];
// Objeto
$dataHoje = new DateTime();
var_dump($dataHoje); // Comando de mostrar detalhes sobre variável
////Especiais

// Resource 
$abreArquivo = fopen("index.php", "r");
// Nulo
$nulo = NULL;

// Variáveis pré-definidas ou  arrays superglobais;
$get = $_GET["teste"]; /* Esta variável recupera todas as variáveis de um formulário confirmado em uma url anterior, através de QUERY_STRING; */
echo $get; /*
Na Url os valores de variáveis são divididos através do símbolo '?'; 
Todas as variáveis enviadas através de QUERY_STRING terão de ser obrigatoriamente do tipo string, tendo a necessidade de serem convertidas posteriormente. 
Por exemplo: */
$get2 = (int)$_GET["a"]; 
echo $get2;

$ip = $_SERVER["REMOTE_ADDR"]; // Informa o IP

echo $ip;

$ip2 = $_SERVER["SCRIPT_NAME"]; // Informa as páginas utilizadas pelo usuário

echo $ip2;

// Escopo de variável
// Variáveis definidas de forma simples na página possuem o escopo local. Exemplo: 
$nome3 = "Felipe";

function teste() {

//global $nome3;
echo $nome3;

}

// Funções utilizam outro escopo de variável para que as variáveis utilizadas dentro sejam independentes, utilizando assim 'global' para utilizar as mesmas variáveis dentro da determinada página, sendo exceção as superglobais que serão trazidas automaticamente através do GET.

exit; // Exit interrompe o código de PHP neste ponto.


?>