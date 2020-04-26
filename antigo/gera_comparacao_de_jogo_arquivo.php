<?php
set_time_limit(6000);
$resultado = array(1,3,6,7,8,12,15,16,17,19,21,22,23,24,25);

$i=0;
$j=0;
$jogo = 0;

$arquivo_r = "resultado.csv";
$arquivo_w = "resultado_1635.csv";
$ponteiro_r = fopen ($arquivo_r, "r");
$ponteiro_w = fopen ($arquivo_w, "a");

$header ="id,qt_ref_ult_con_05" ;
fwrite($ponteiro_w, $header."\n");

//controle de execução
$date = date('Y-m-d H:i');
echo $date;



while (($dados = fgetcsv ($ponteiro_r, 1000, ";")) !=FALSE ) {
	  for($i=1; $i<16; $i++){
		  for($j=0; $j<15; $j++){
				if ($dados[$i]==$resultado[$j]){
					$jogo++;
					continue;
				}else if($dados[$i] < $resultado[$j]){
					continue;
				}
			}
		}	

$up = ($dados[0].",".$jogo);
fwrite($ponteiro_w, $up."\n");
$jogo = 0;
}

fclose ($ponteiro_r);
fclose ($ponteiro_w);
echo "Arquivo Gerado com sucesso"	
?>