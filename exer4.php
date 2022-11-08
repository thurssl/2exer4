<?php
$data = $_POST['d'];
$dia = substr($data,8,2);
$mes = substr($data,5,2);
$ano = substr($data,0,4);

echo "Data: $dia / $mes / $ano";
?>