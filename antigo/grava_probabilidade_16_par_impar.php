<?php
set_time_limit(6000);
$resultado = 1;

$par 	= 0;
$impar	= 0;
$i		= 0;
$j		= 1;
$jogo 	= 0;

$arquivo_r = "arquivos\\resultado_16.csv";
$ponteiro_r = fopen ($arquivo_r, "r");
$arquivo_w = "arquivos\\resultado_16_par_impar.csv";
$ponteiro_w = fopen ($arquivo_w, "a");
$header ="nr_concurso,qt_par,qt_impar" ;
fwrite($ponteiro_w, $header."\n");


while (($dados = fgetcsv ($ponteiro_r, 1000, ";")) !=FALSE ) {

	for($i=1; $i<17; $i++){
		if($dados[$i] % 2 == 0 ){
			$par++;
		}else{
			$impar++;
		}	
	}	 

$up = ($dados[0].",".$par.",".$impar);
fwrite($ponteiro_w, $up."\n");
$par=0;
$impar=0;
}


fclose ($ponteiro_r);
fclose ($ponteiro_w);
echo "Arquivo Gerado com sucesso"	
?>