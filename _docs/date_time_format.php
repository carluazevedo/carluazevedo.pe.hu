<?php

/**
 * CONVERTER UMA DATA RESGATADA DO BANCO DE DADOS
 */

/**
 * EXEMPLO:
 * O script recebe uma data em uma array
 */
$sql_squery = array(
    'date' => '2016-02-27',
    'time1' => '15:25:00',
    'time2' => '09:10:00'
);

echo $sql_squery['date'],'<br>';
echo '<br>';

/**
 * Para formatar a data usaremos o seguinte comando:
 */
echo date('d/m/Y', strtotime($sql_squery['date'])),'<br>';
echo date('d/m/y', strtotime($sql_squery['date'])),'<br>';
echo '<br>';

/**
 * Ou
 */
$data = $sql_squery['date'];
echo date('d/m/Y', strtotime($data)),'<br>';
echo date('d/m', strtotime($data)),'<br>';
echo '<br>';

/**
 * O mesmo princípio serve para as horas
 */
echo $sql_squery['time1'],'<br>';
echo '<br>';

echo date('H:i', strtotime($sql_squery['time1'])),'<br>';
echo date('h:i A', strtotime($sql_squery['time1'])),'<br>';

$hora = $sql_squery['time2'];
echo date('h:i a', strtotime($hora)),'<br>';