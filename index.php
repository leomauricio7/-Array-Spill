<pre>

<?php 
require_once 'Derramamento.php';
$Derramamento = new Derramamento();
$n1 = array(1,2,3,4,5,6,7,8,9);
$n2 = array(20,10,11,12,13);
$n3 = array(30);
$n4 = array(80);
$n5 = array(80);
$n6 = array(80);
$n7 = array(80);
$n8 = array(80);

$nivel1 = $Derramamento->getFilhos($n1,null);
$nivel2 = $Derramamento->getFilhos($n2,$nivel1['n2']);
$nivel3 = $Derramamento->getFilhos($n3,$nivel2['n2']);
$nivel4 = $Derramamento->getFilhos($n4,$nivel3['n2']);
$nivel5 = $Derramamento->getFilhos($n5,$nivel4['n2']);
$nivel6 = $Derramamento->getFilhos($n6,$nivel5['n2']);
$nivel7 = $Derramamento->getFilhos($n7,$nivel6['n2']);
$nivel8 = $Derramamento->getFilhos($n8,$nivel7['n2']);

echo '<h1>DERRAMAMENTO DE ARRAYS</h1>';

$Derramamento->exibeArrayOrigin($n1);
echo '<h1>NIVEL 1</h1>';
var_dump($nivel1);

$Derramamento->exibeArrayOrigin($n2);
echo '<h1>NIVEL 2</h1>';
var_dump($nivel2);

$Derramamento->exibeArrayOrigin($n3);
echo '<h1>NIVEL 3</h1>';
var_dump($nivel3);

$Derramamento->exibeArrayOrigin($n4);
echo '<h1>NIVEL 4</h1>';
var_dump($nivel4);

$Derramamento->exibeArrayOrigin($n5);
echo '<h1>NIVEL 5</h1>';
var_dump($nivel5);

$Derramamento->exibeArrayOrigin($n6);
echo '<h1>NIVEL 6</h1>';
var_dump($nivel6);

$Derramamento->exibeArrayOrigin($n7);
echo '<h1>NIVEL 7</h1>';
var_dump($nivel7);

$Derramamento->exibeArrayOrigin($n8);
echo '<h1>NIVEL 8</h1>';
var_dump($nivel8);
?>
</pre>