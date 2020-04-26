<?php
$qt_ant=0;
$count=0;

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
set_time_limit(600000);
ini_set('memory_limit', '2048M');



$mysqli = new mysqli('localhost', 'valnir', 'nil123456', 'LT');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$sql = "SELECT b1, b2,b3,b4,b5,b6,b7,b8, b9, b10, b11, b12, b13, b14, b15 FROM  concurso  WHERE nr_conc = (select max(nr_conc) from concurso)";
$query = $mysqli->query($sql);
$dados = $query->fetch_array();


for($i=1; $i<3268761; $i++){
    $sql2 = "SELECT b1, b2,b3,b4,b5,b6,b7,b8, b9, b10, b11, b12, b13, b14, b15 FROM  probabilidade  WHERE id = $i";
    $query2 = $mysqli->query($sql2);
    $dados2 = $query2->fetch_array();

    for($j=0; $j<15; $j++){
        if (in_array($dados[$j],$dados2)){
            $count++;
        }
    }
    $sqlUp = "UPDATE probabilidade SET qt_ant=$count WHERE id= $i";
    if (mysqli_query($mysqli, $sqlUp)) {
		echo "probabilidade nr: ".$i." atualizado com sucesso  qt_ant= $count"."<br>";
		$count = 0;
	} else {
		echo "Error: " . $sqlUp . "<br>" . mysqli_error($mysqli);
	}
    
}






mysqli_close($mysqli);
?>