<?php
//** Aula sobre funções de saída ... */

// Exemplo com echo
echo "Olá, mundo!\n";
echo "Este é um exemplo.";

// Exemplo com print
print "Este texto será exibido.";

// Exemplo com flush (para testar com controle de buffer)
ob_start();
echo "Esta saída será armazenada no buffer.";
// Faça alguma manipulação do buffer...
ob_flush();  // Envia a saída para o navegador
echo "Esta saída também será exibida.";

// Exemplo com controle de buffer
ob_start();
echo "Este é um exemplo de controle de buffer.";
$conteudo_buffer = ob_get_contents();
echo "Conteúdo do buffer: " . $conteudo_buffer;
ob_end_flush();  // Envia a saída e desativa o controle de buffer

/**
 * var_dump — Despeja na saída informações sobre uma variável
 */

// Exemplo de var_dump

$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

?>