<?php
$par=0;


/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
/* Habilita a exibição de erros */
ini_set("display_errors", 1);



$conexao = mysqli_connect("localhost","valnir","nil123456", "LT");
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

set_time_limit(600000);
ini_set('memory_limit', '2048M');

$sql = "SELECT * FROM  probabilidade  WHERE qt_par = 0";
$resultado=mysqli_query($conexao, $sql);
	
$linha = mysqli_num_rows($resultado);
for ($i=0; $i<$linha;$i++){
	$dados = mysqli_fetch_array($resultado);
	
	for($j=1; $j<16; $j++ ){
		if($dados[$j]%2==0){
			$par++;
		}
	}
	$sqlUp = "UPDATE probabilidade SET qt_par=$par WHERE ID= $dados[ID]";
	if (mysqli_query($conexao, $sqlUp)) {
		echo "concurso nr: ".$dados["ID"]." atualizado com sucesso  qt_par= $par".'<br>';
		$par = 0;
	} else {
		echo "Error: " . $sqlUp . "<br>" . mysqli_error($conexao);
	}
}



mysqli_close($conexao);
?>