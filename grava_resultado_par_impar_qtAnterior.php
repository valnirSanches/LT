<?php
set_time_limit(6000);
$resultado = 1;

$par 	= 0;
$impar	= 0;
$i		= 0;
$j		= 1;
$jogo 	= 0;
$bola 	= [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$arquivo_r = "arquivos\\resultado_12_09_18.csv";
$ponteiro_r = fopen ($arquivo_r, "r");
$arquivo_w = "arquivos\\resultados_par_impar.csv";
$ponteiro_w = fopen ($arquivo_w, "a");
$header ="nr_concurso,data,bola1,bola2,bola3,bola4,bola5,bola6,bola7,bola8,bola9,bola10,bola11,bola12,bola13,bola14,bola15,qt_ant,qt_par,qt_impar" ;
fwrite($ponteiro_w, $header."\n");


while (($dados = fgetcsv ($ponteiro_r, 1000, ";")) !=FALSE ) {

	if($dados[0] == 1 ){
	    $up = ($dados[0].",".$dados[1].",".$dados[2].",".$dados[3].",".$dados[4].",".$dados[5].",".$dados[6].",".$dados[7].",".$dados[8].",".$dados[9].",".$dados[10].",".$dados[11].",".$dados[12].",".$dados[13].",".$dados[14].",".$dados[15].",".$dados[16].",".$jogo.",".$par.",".$impar);
		fwrite($ponteiro_w, $up."\n");
		continue;	
	}else if($dados[0] == $bola[0] + 1){
	    for($i=2; $i<17; $i++){
			if($dados[$i] % 2 == 0 ){
				$par++;
			}else{
				$impar++;
			}	
		}	 
		for($k=2; $k<17; $k++){
			for($j=1; $j<16; $j++)
				if ($dados[$k]==$bola[$j]){
					$jogo++;
			}
		}  
	}		


			
$bola = array($dados[0], $dados[2], $dados[3], $dados[4], $dados[5], $dados[6], $dados[7], 
              $dados[8], $dados[9], $dados[10], $dados[11], $dados[12], $dados[13], $dados[14], $dados[15], $dados[16]) ;	

$up = ($dados[0].",".$dados[1].",".$dados[2].",".$dados[3].",".$dados[4].",".$dados[5].",".$dados[6].",".$dados[7].",".$dados[8].",".$dados[9].",".$dados[10].",".$dados[11].",".$dados[12].",".$dados[13].",".$dados[14].",".$dados[15].",".$dados[16].",".$jogo.",".$par.",".$impar);
fwrite($ponteiro_w, $up."\n");
$jogo = 0;
$j=1;
$par=0;
$impar=0;
}


fclose ($ponteiro_r);
fclose ($ponteiro_w);
echo "Arquivo Gerado com sucesso"	
?>