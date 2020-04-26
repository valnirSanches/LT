<?php
//Faz a ordenação da planilha/csv baixada do site e insere na tabela
$conexao = mysqli_connect("localhost","valnir","nil123456", "LT");
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

if (file_exists("LT.csv")) 
{
    $arquivo = fopen ("LT.csv", 'r');
    while(!feof($arquivo))
    {
        $linha = fgetcsv($arquivo , $length = 0, $delimiter = ",");
        $linha2 = array_slice($linha,2,17);
        sort($linha2);
        $sql = "INSERT INTO concurso VALUES ";
        $sql .= "($linha[0],$linha2[0], $linha2[1], $linha2[2], $linha2[3], $linha2[4], $linha2[5], $linha2[6], $linha2[7], $linha2[8], $linha2[9], $linha2[10], $linha2[11],  $linha2[12],  $linha2[13],  $linha2[14])" ;

        if (mysqli_query($conexao, $sql)) {
            echo $linha[0]." New record created successfully \n";
            echo $sql.'<br>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        }

    }
    mysqli_close($conexao);
    echo "Registros Gravados com Sucesso!!!";   
    fclose ($arquivo);
}
else {
    echo "Arquivo não encontrado!!!";
}
/*
set_time_limit(600000);
*/



?>
