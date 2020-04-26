<?php
set_time_limit(6000);


$qt 	= 0;
$qt_11  = 0;
$qt_12  = 0;
$qt_13  = 0;
$qt_14  = 0;
$qt_15  = 0;


$arquivo_prob = "arquivos\\resultado_16.csv";
$ponteiro_prob = fopen ($arquivo_prob, "r");

$arquivo_w = "arquivos\\probabilidade_resultados_16.csv";
$ponteiro_w = fopen ($arquivo_w, "a");
$header ="ID,bola1,bola2,bola3,bola4,bola5,bola6,bola7,bola8,bola9,bola10,bola11,bola12,bola13,bola14,bola15,bola16,qt_acerto_11,qt_acerto_12,qt_acerto_13,qt_acerto_14,qt_acerto_15" ;
fwrite($ponteiro_w, $header."\n");


while (($dados_prob = fgetcsv ($ponteiro_prob, 1000, ";")) !=FALSE ) {
    $arquivo_result = "arquivos\\resultado_12_09_18.csv";
    $ponteiro_result = fopen ($arquivo_result, "r");
    while (($dados_result = fgetcsv ($ponteiro_result, 1000, ";")) !=FALSE ) {
        $qt 	= 0;
        $i		= 0;
        for($i=1;$i<18;$i++){
            $j		= 0;
            for($j=2;$j<18;$j++){
                if(@$dados_prob[$i] <  @$dados_result[$j]){
                    $j=18;
                }else if(@$dados_prob[$i] == @$dados_result[$j]){
                    $qt++;
                    $j=18;
                    //continue;
                }
            }
        }
        if($qt==11){
            $qt_11++;
        }else if ($qt==12){
            $qt_12++; 
        }else if ($qt==13){
            $qt_13++;
        }else if ($qt==14){
            $qt_14++;
        }else if ($qt==15){
            $qt_15++;
        }
    
    }
    fclose ($ponteiro_result);
    
    $up = ($dados_prob[0].",".$dados_prob[1].",".$dados_prob[2].",".$dados_prob[3].",".$dados_prob[4].",".$dados_prob[5].",".$dados_prob[6].",".$dados_prob[7].",".$dados_prob[8].",".$dados_prob[9].",".$dados_prob[10].",".$dados_prob[11].",".$dados_prob[12].",".$dados_prob[13].",".$dados_prob[14].",".$dados_prob[15].",".$dados_prob[16].",".$qt_11.",".$qt_12.",".$qt_13.",".$qt_14.",".$qt_15);
    fwrite($ponteiro_w, $up."\n");
    var_dump($up);
    $qt 	= 0;
    $qt_11  = 0;
    $qt_12  = 0;
    $qt_13  = 0;
    $qt_14  = 0;
    $qt_15  = 0;
}


fclose($ponteiro_prob);
fclose ($ponteiro_w);
echo "Arquivo Gerado com sucesso"
?>