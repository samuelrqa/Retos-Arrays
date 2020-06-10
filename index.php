<?php

//--------------------------RETO 1 --------------------------
echo "<br><b>RETO 1 - NIVEL COQUITO:<br>IMPRIMIR LOS 10 PRIMEROS NÚMEROS PARES</b><br>";
$pares = array(2,4,6,8,10,12,14,16,18,20);

foreach ($pares as $par)
    echo "$par<br>";

//-------------------------- RETO 2 --------------------------

echo "<br><b>RETO 2 - NIVEL SAYAYIN:<br>IMPRIMIR LA SUMA DE LOS 100 PRIMEROS NÚMEROS NATURALES</b>";
$naturales = array();
$suma = 0;

//Llenado del arreglo $naturales
for ($i = 0; $i<100; $i++) {
    $naturales[$i] = $i+1;
    // Comprobar los elementos del arreglo (se puede omitir en este reto)
    if ($i % 20 == 0)
        echo "<br>";
    echo sprintf("%02d", $naturales[$i])."\t";
}

//Recorrer y sumar
foreach ($naturales as $num)
    $suma += $num;

echo "<br><br>La suma es ".$suma."<br>";

//-------------------------- RETO 3 --------------------------

echo "<br><b>RETO 3 - NIVEL ESPARTANO:<br>IMPRIMIR INFORMACIÓN DE JUGADORES COLOMBIANOS EN EL EXTERIOR</b><br><br>";

$jugadoresColombianos = array (
    $jugador1 = array("Nombre"=>"Radamel Falcao García","Posición"=>"Delantero","País"=>"Turquía","Edad"=>34,"Estatura"=>1.77),
    $jugador2 = array("Nombre"=>"James Rodríguez","Posición"=>"Centrocampista","País"=>"España","Edad"=>28,"Estatura"=>1.68),
    $jugador3 = array("Nombre"=>"Juan Fernando Quintero","Posición"=>"Volante creativo","País"=>"Argentina","Edad"=>27,"Estatura"=>1.68),
    $jugador4 = array("Nombre"=>"Juan Guillermo Cuadrado","Posición"=>"Mediocampista","País"=>"Italia","Edad"=>32,"Estatura"=>1.76),
    $jugador5 = array("Nombre"=>"David Ospina Ramírez","Posición"=>"Arquero","País"=>"Italia","Edad"=>31,"Estatura"=>1.83),
    $jugador6 = array("Nombre"=>"Yerry Mina Gónzalez","Posición"=>"Defensa","País"=>"Inglaterra","Edad"=>25,"Estatura"=>1.95),
    $jugador7 = array("Nombre"=>"Luis Fernando Muriel","Posición"=>"Delantero","País"=>"Italia","Edad"=>29,"Estatura"=>1.78),
    $jugador8 = array("Nombre"=>"Santiago Arias Naranjo","Posición"=>"Defensa","País"=>"España","Edad"=>28,"Estatura"=>1.78),
    $jugador9 = array("Nombre"=>"Dávison Sánchez Mina","Posición"=>"Defensa","País"=>"Inglaterra","Edad"=>23,"Estatura"=>1.87),
    $jugador10 = array("Nombre"=>"Duván Zapata Banguero","Posición"=>"Delantero","País"=>"Italia","Edad"=>29,"Estatura"=>1.89),
    $jugador11 = array("Nombre"=>"Carlos Bacca Ahumada","Posición"=>"Delantero","País"=>"España","Edad"=>33,"Estatura"=>1.81),
    $jugador12 = array("Nombre"=>"Mateus Uribe Villa","Posición"=>"Mediocampista","País"=>"Portugal","Edad"=>29,"Estatura"=>1.80)
);

$i = 1;
foreach ($jugadoresColombianos as $jugador) {
    echo "<b>JUGADOR ".$i++."</b><br>";
    foreach ($jugador as $clave=>$valor)
        echo "<b>".$clave.":</b> ".$valor."<br>";
    echo "-----------------------------<br>";
}