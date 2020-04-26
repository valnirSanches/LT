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


for($i=2; $i<1953; $i++){
    $sql = "SELECT b1, b2,b3,b4,b5,b6,b7,b8, b9, b10, b11, b12, b13, b14, b15 FROM  concurso  WHERE nr_conc = $i-1";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    $sql2 = "SELECT b1, b2,b3,b4,b5,b6,b7,b8, b9, b10, b11, b12, b13, b14, b15 FROM  concurso  WHERE nr_conc = $i";
    $query2 = $mysqli->query($sql2);
    $dados2 = $query2->fetch_array();

    for($j=0; $j<15; $j++){
        if (in_array($dados[$j],$dados2)){
            $count++;
        }
    }
    $sqlUp = "UPDATE concurso SET qt_conc_ant=$count WHERE nr_conc= $i";
    if (mysqli_query($mysqli, $sqlUp)) {
		echo "concurso nr: ".$i." atualizado com sucesso  qt_ant= $count"."<br>";
		$count = 0;
	} else {
		echo "Error: " . $sqlUp . "<br>" . mysqli_error($mysqli);
	}
    
}





/*
$resultado=mysqli_query($conexao, $sql);
	
$linha = mysqli_num_rows($resultado);




for ($i=0; $i<$linha;$i++){
	$dados = mysqli_fetch_array($resultado);

    for($j=1; $j<16; $j++ ){
        
        
    }
    print_r($dados);
    print_r($result_ant);
//    $sqlUp = "UPDATE concurso SET qt_par=$par WHERE nr_conc= $dados[nr_conc]";


/*
    if (mysqli_query($conexao, $sqlUp)) {
		echo "concurso nr: ".$dados["nr_conc"]." atualizado com sucesso  qt_par= $par"."<br>";
		$par = 0;
	} else {
		echo "Error: " . $sqlUp . "<br>" . mysqli_error($conexao);
    }

}

*/

mysqli_close($mysqli);
?>