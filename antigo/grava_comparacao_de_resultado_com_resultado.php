<?php
$jogo=0;
$jogo1=2;
$jogo2=1;
$i=0;
$j=0;
$par=0;
$cont1  =0;
$cont2  =0;
$cont3  =0;
$cont4  =0;
$cont5  =0;
$cont6  =0;
$cont7  =0;
$cont8  =0;
$cont9  =0;
$cont10 =0;
$cont11 =0;
$cont12 =0;
$cont13 =0;
$cont14 =0;
$cont15 =0;
$cont16 =0;
$cont17 =0;
$cont18 =0;
$cont19 =0;
$cont20 =0;
$cont21 =0;
$cont22 =0;
$cont23 =0;
$cont24 =0;
$cont25 =0;

$mysqli = new mysqli('localhost', 'root', 'admin', 'lt');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

    $arquivo = "qt_ant_par.csv";
	$ponteiro = fopen ($arquivo, "a");
	set_time_limit(6000);
	
for($t=1; $t<1582;$t++)
{
	$sql  = "Select nr_concurso, bola1,bola2,bola3,bola4,bola5,bola6,bola7,bola8,bola9,bola10,bola11,bola12,bola13,bola14,bola15 FROM resultado 
			 WHERE nr_concurso ='$jogo1'";
	$query  = $mysqli->query($sql);

	$sql2  = "Select nr_concurso, bola1,bola2,bola3,bola4,bola5,bola6,bola7,bola8,bola9,bola10,bola11,bola12,bola13,bola14,bola15 FROM resultado 
			 WHERE nr_concurso ='$jogo2'";		 
	$query2 = $mysqli->query($sql2);

	

	while ($dados = $query->fetch_array()) {
	  echo '<br>'.$dados['nr_concurso'] ;
	  echo '-'.$dados['bola1'] ;
	  echo '-'.$dados['bola2'] ;
	  echo '-'.$dados['bola3'] ;
	  echo '-'.$dados['bola4'] ;
	  echo '-'.$dados['bola5'] ;
	  echo '-'.$dados['bola6'] ;
	  echo '-'.$dados['bola7'] ;
	  echo '-'.$dados['bola8'] ;
	  echo '-'.$dados['bola9'] ;
	  echo '-'.$dados['bola10'] ;
	  echo '-'.$dados['bola11'] ;
	  echo '-'.$dados['bola12'] ;
	  echo '-'.$dados['bola13'] ;
	  echo '-'.$dados['bola14'] ;
	  echo '-'.$dados['bola15'] ;  
	 
		  while ($dados2 = $query2->fetch_array()) {
			  echo '<br>'.$dados2['nr_concurso'] ;
			  echo '-'.$dados2['bola1'] ;
			  echo '-'.$dados2['bola2'] ;
			  echo '-'.$dados2['bola3'] ;
			  echo '-'.$dados2['bola4'] ;
			  echo '-'.$dados2['bola5'] ;
			  echo '-'.$dados2['bola6'] ;
			  echo '-'.$dados2['bola7'] ;
			  echo '-'.$dados2['bola8'] ;
			  echo '-'.$dados2['bola9'] ;
			  echo '-'.$dados2['bola10'] ;
			  echo '-'.$dados2['bola11'] ;
			  echo '-'.$dados2['bola12'] ;
			  echo '-'.$dados2['bola13'] ;
			  echo '-'.$dados2['bola14'] ;
			  echo '-'.$dados2['bola15'] ;  
		 
	 
			for($i=1; $i<16;$i++){
				if ($dados[$i]%2 == 0){
				$par++;
				}
			   for($j=1;$j<16;$j++){				   
					if ($dados[$i]==$dados2[$j]){
						$jogo++;
						continue;
					}
				}	
			}	
		}
	}
 echo '<br><br>'.$jogo;
 
 $up = ($jogo1.",".$jogo.",".$par);
 echo '<br>'.$up;
fwrite($ponteiro, $up."\n");
//mysqli_query($mysqli,$up);
 
 
/*if(mysqli_affected_rows($mysqli) > 0){
  echo "Sucesso: Atualizado corretamente!";
}else{           
  echo "Aviso: Não foi atualizado!";
} */
$jogo=0;
$par=0;
$jogo1++;
$jogo2++;
} 
 mysqli_close($mysqli);	
fclose ($ponteiro);
	echo "Arquivo Gerado com sucesso"	
?>