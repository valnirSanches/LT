<?php



/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
set_time_limit(600000);
ini_set('memory_limit', '2048M');




for($i=1; $i<1953; $i++){
    $mysqli = new mysqli('localhost', 'valnir', 'nil123456', 'LT');
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $count=0;
    $k=1;
    $dados=0;
    $sql = "SELECT b1, b2,b3,b4,b5,b6,b7,b8, b9, b10, b11, b12, b13, b14, b15 FROM  concurso  WHERE nr_conc = $i";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
var_dump($dados);
    for($j=1; $j<16; $j++){
echo "<br>";
echo "atual ".$dados[$j];
echo "<br>";
echo "próximo ".$dados[$j+1];
echo "<br>";
        $l=$j+1;
        if ($dados["b$j"]+1 == $dados["b$l"] ){
            $count++;
            echo "contador ".$count;
        }else {
            if($count +1 >=4){
                $seq = $count + 1;
                $count = 0;
                
                $sqlUp = "UPDATE concurso SET seq$k=$seq WHERE nr_conc= $i";
                echo "<br>";
                echo $sqlUp;
                    mysqli_query($mysqli, $sqlUp);
                    echo "concurso nr: ".$i." atualizado com sucesso  seq$k = $seq"."<br>";
                    $seq = 0;
                    echo $k;
                    $k++;
                
            }else{
                $count = 0;
            }
        }
        
    }

    mysqli_close($mysqli);    
}


?>