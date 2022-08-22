<?php

// Datas
echo "<h3>Dia</h3>";
echo date('d')."<br>"; // irá retornar o dia (exemplo: 25)

echo "<h3>Dia da semana</h3>";
echo date('D')."<br>"; // irá retornar o dia da semana (exemplo: Mon)
echo date('l')."<br>"; // irá retornar o dia da semana (exemplo: Monday)

echo "<h3>Mês</h3>";
echo date('m')."<br>"; // irá retornar o mês (exemplo: 07)
echo date('M')."<br>"; // irá retornar o nome do mês (exemplo: Jul)

echo "<h3>Ano</h3>";
echo date('y')."<br>"; // irá retornar os dois ultimos números do ano (exemplo: 22)
echo date('Y')."<br>"; // irá retornar o ano (exemplo: 2022)

echo date('d/m/Y')."<br>"; // data completa

echo "<hr>";

echo "<h3>Horas</h3>";
date_default_timezone_set('Africa/Maputo');
echo date('H')."<br>"; // horas
echo date('i')."<br>"; // minutos
echo date('s')."<br>"; // segundos
echo date('H:i:s A')."<br>"; // hora completa, A >> PM ou AM

echo "<hr>";

echo "<h3>Banco de dados</h3>";
// BANCO DE DADOS
$date = date('Y-m-d')."<br>"; // DATE
$datetime = date('Y-m-d H:i:s')."<br>"; // DATETIME
echo $datetime;

echo "<hr>";

echo "<h3>Segundos que se passaram desde o ano 1970 até agora</h3>";
// TIME
echo time()."<br>"; // quantidades de segundos que se passaram desde o ano 1970 até agora

echo "<h3>Formatando a data</h3>";
// formatando a data
$time = time();
echo date('d/m/Y', $time);

echo "<hr>";

echo "MKTIME</h3>";
// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2022); // mktime(Hora, minutos, segundos, mês, dia, ano);
echo date('d/m/Y - h:i', $data_pagamento); // formatando a data de pagamento

echo "<hr>";

echo "<h3>Banco de dados</h3>";
// STRTOTIME
$db_data = '2019-04-10 13:30:00'; // exemplo dados do banco de dados
// formatando
$data = strtotime($db_data);
echo date('d/m/Y', $data)."<br>";

// php -S localhost:8000 >>> http://localhost/cursophp.com/datas/datas.php