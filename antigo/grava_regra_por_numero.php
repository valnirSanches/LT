<?php
for($result=10;$result<=20;$result++)
{
$a=1;
$b=1;
$c=1;
$d=1;
$e=1;
$f=1;
$g=1;
$h=1;
$i=1;
$j=1;
$k=1;
$l=1;
$m=1;
$n=1;
$o=1;
$p=1;
$q=1;
$r=1;
$s=1;
$t=1;
$u=1;
$v=1;
$x=1;
$z=1;
$w=1;
unset($valor);
unset($qt);


$mysqli = new mysqli('localhost', 'root', 'admin', 'lt');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

	

$sql2  = "Select nr_concurso, bola1, bola2,bola3,bola4,bola5,bola6,bola7,bola8,bola9,bola10,bola11,bola12,bola13,bola14,bola15 FROM resultado 
			 WHERE nr_concurso ='$result'";
$query2 = $mysqli->query($sql2);
$dados2 = $query2->fetch_array();	



$sql  = "Select nr_concurso, bola1,bola2,bola3,bola4,bola5,bola6,bola7,bola8,bola9,bola10,bola11,bola12,bola13,bola14,bola15 FROM resultado 
         WHERE nr_concurso >=".($result-10)." and nr_concurso <=".($result-1);
$query = $mysqli->query($sql);

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

	if ($dados[1]==1)
	{
	  $valor[1][$a]='S';
	  $a++;
	  @$qt[1][1]++;
	}
	else
	{
	  $valor[1][$a]='N';
	  $a++;
	}

	if($dados[1]==2 or $dados[2]==2)
	  {
		  
		$valor[2][$b] ='S';
		$b++;
		@$qt[2][1]++;		  
	  }
	  else
	  {	  
		  $valor[2][$b] ='N';
		  $b++;	
	  }
 	if($dados[1]==3 or $dados[2]==3 or $dados[3]==3 )
	  {
		  
		  $valor[3][$c] ='S';
		  $c++;
		@$qt[3][1]++;		  
	  }
	  else
	  {	  
		  $valor[3][$c] ='N';
		  $c++;	
	  }
 	if($dados[1]==4 or $dados[2]==4 or $dados[3]==4 or $dados[4]==4)
	  {
		  
		  $valor[4][$d] ='S';
		  $d++;
		@$qt[4][1]++;		  
	  }
	  else
	  {	  
		  $valor[4][$d] ='N';
		  $d++;	
	  }	  
	  
	   	if($dados[1]==5 or $dados[2]==5 or $dados[3]==5 or $dados[4]==5 or $dados[5]==5)
	  {
		  
		  $valor[5][$e] ='S';
		  $e++;
		@$qt[5][1]++;		  
	  }
	  else
	  {	  
		  $valor[5][$e] ='N';
		  $e++;	
	  }	  
 
	   	if($dados[1]==6 or $dados[2]==6 or $dados[3]==6 or $dados[4]==6 or $dados[5]==6 or $dados[6]==6)
	  {
		  
		  $valor[6][$f] ='S';
		  $f++;
		@$qt[6][1]++;		  
	  }
	  else
	  {	  
		  $valor[6][$f] ='N';
		  $f++;	
	  }	  
 
 	  if($dados[1]==7 or $dados[2]==7 or $dados[3]==7 or $dados[4]==7 or $dados[5]==7 or $dados[6]==7 or $dados[7]==7)
	  {
		  
		  $valor[7][$g] ='S';
		  $g++;
		@$qt[7][1]++;		  
	  }
	  else
	  {	  
		  $valor[7][$g] ='N';
		  $g++;	
	  }
	  
  	  if($dados[1]==8 or $dados[2]==8 or $dados[3]==8 or $dados[4]==8 or $dados[5]==8 or $dados[6]==8 or $dados[7]==8 or $dados[8]==8)
	  {
		  
		  $valor[8][$h] ='S';
		  $h++;
		@$qt[8][1]++;		  
	  }
	  else
	  {	  
		  $valor[8][$h] ='N';
		  $h++;	
	  }	
 
   	  if($dados[1]==9 or $dados[2]==9 or $dados[3]==9 or $dados[4]==9 or $dados[5]==9 or $dados[6]==9 or $dados[7]==9 or $dados[8]==9 or $dados[9]==9)
	  {
		  
		  $valor[9][$i] ='S';
		  $i++;
		@$qt[9][1]++;		  
	  }
	  else
	  {	  
		  $valor[9][$i] ='N';
		  $i++;	
	  }	
 
      if($dados[1]==10 or $dados[2]==10 or $dados[3]==10 or $dados[4]==10 or $dados[5]==10 or $dados[6]==10 or $dados[7]==10 or $dados[8]==10 or $dados[9]==10 or $dados[10]==10)
	  {
		  
		  $valor[10][$j] ='S';
		  $j++;
		@$qt[10][1]++;		  
	  }
	  else
	  {	  
		  $valor[10][$j] ='N';
		  $j++;	
	  }	
      if($dados[1]==11 or $dados[2]==11 or $dados[3]==11 or $dados[4]==11 or $dados[5]==11 or $dados[6]==11 or $dados[7]==11 or $dados[8]==11 or $dados[9]==11 or $dados[10]==11 or $dados[11]==11)
	  {
		  
		  $valor[11][$k] ='S';
		  $k++;
		@$qt[11][1]++;		  
	  }
	  else
	  {	  
		  $valor[11][$k] ='N';
		  $k++;	
	  }	
 
       if($dados[2]==12 or $dados[3]==12 or $dados[4]==12 or $dados[5]==12 or $dados[6]==12 or $dados[7]==12 or $dados[8]==12 or $dados[9]==12 or $dados[10]==12 or $dados[11]==12 or $dados[12]==12)
	  {
		  
		  $valor[12][$l] ='S';
		  $l++;
		@$qt[12][1]++;		  
	  }
	  else
	  {	  
		  $valor[12][$l] ='N';
		  $l++;	
	  }	
      if($dados[3]==13 or $dados[4]==13 or $dados[5]==13 or $dados[6]==13 or $dados[7]==13 or $dados[8]==13 or $dados[9]==13 or $dados[10]==13 or $dados[11]==13 or $dados[12]==13 or $dados[13]==13)
	  {
		  
		  $valor[13][$m] ='S';
		  $m++;
		@$qt[13][1]++;		  
	  }
	  else
	  {	  
		  $valor[13][$m] ='N';
		  $m++;	
	  }	
 
      if($dados[4]==14 or $dados[5]==14 or $dados[6]==14 or $dados[7]==14 or $dados[8]==14 or $dados[9]==14 or $dados[10]==14 or $dados[11]==14 or $dados[12]==14 or $dados[13]==14 or $dados[14]==14)
	  {
		  
		  $valor[14][$n] ='S';
		  $n++;
		@$qt[14][1]++;		  
	  }
	  else
	  {	  
		  $valor[14][$n] ='N';
		  $n++;	
	  }	
      if($dados[5]==15 or $dados[6]==15 or $dados[7]==15 or $dados[8]==15 or $dados[9]==15 or $dados[10]==15 or $dados[11]==15 or $dados[12]==15 or $dados[13]==15 or $dados[14]==15 or $dados[15]==15)
	  {
		  
		  $valor[15][$o] ='S';
		  $o++;
		@$qt[15][1]++;		  
	  }
	  else
	  {	  
		  $valor[15][$o] ='N';
		  $o++;	
	  }	 
 
if($dados[6]==16 or $dados[7]==16 or $dados[8]==16 or $dados[9]==16 or $dados[10]==16 or $dados[11]==16 or $dados[12]==16 or $dados[13]==16 or $dados[14]==16 or $dados[15]==16)
	  {
		  
		  $valor[16][$p] ='S';
		  $p++;
		@$qt[16][1]++;		  
	  }
	  else
	  {	  
		  $valor[16][$p] ='N';
		  $p++;	
	  }	 

     if($dados[7]==17 or $dados[8]==17 or $dados[9]==17 or $dados[10]==17 or $dados[11]==17 or $dados[12]==17 or $dados[13]==17 or $dados[14]==17 or $dados[15]==17)
	  {
		  
		  $valor[17][$q] ='S';
		  $q++;
		@$qt[17][1]++;		  
	  }
	  else
	  {	  
		  $valor[17][$q] ='N';
		  $q++;	
	  }	 	  
      if($dados[8]==18 or $dados[9]==18 or $dados[10]==18 or $dados[11]==18 or $dados[12]==18 or $dados[13]==18 or $dados[14]==18 or $dados[15]==18)
	  {
		  
		  $valor[18][$r] ='S';
		  $r++;
		@$qt[18][1]++;		  
	  }
	  else
	  {	  
		  $valor[18][$r] ='N';
		  $r++;	
	  }	 	  
 
     if($dados[9]==19 or $dados[10]==19 or $dados[11]==19 or $dados[12]==19 or $dados[13]==19 or $dados[14]==19 or $dados[15]==19)
	  {
		  
		  $valor[19][$s] ='S';
		  $s++;
		@$qt[19][1]++;		  
	  }
	  else
	  {	  
		  $valor[19][$s] ='N';
		  $s++;	
	  }	 	   
       if($dados[10]==20 or $dados[11]==20 or $dados[12]==20 or $dados[13]==20 or $dados[14]==20 or $dados[15]==20)
	  {
		  
		  $valor[20][$t] ='S';
		  $t++;
		@$qt[20][1]++;		  
	  }
	  else
	  {	  
		  $valor[20][$t] ='N';
		  $t++;	
	  } 	 	   
        if($dados[11]==21 or $dados[12]==21 or $dados[13]==21 or $dados[14]==21 or $dados[15]==21)
	  {
		  
		  $valor[21][$u] ='S';
		  $u++;
		@$qt[21][1]++;		  
	  }
	  else
	  {	  
		  $valor[21][$u] ='N';
		  $u++;	
	  } 	 	   
         if($dados[12]==22 or $dados[13]==22 or $dados[14]==22 or $dados[15]==22)
	  {
		  
		  $valor[22][$v] ='S';
		  $v++;
		@$qt[22][1]++;		  
	  }
	  else
	  {	  
		  $valor[22][$v] ='N';
		  $v++;	
	  } 	 	   
 
          if($dados[13]==23 or $dados[14]==23 or $dados[15]==23)
	  {
		  
		  $valor[23][$x] ='S';
		  $x++;
		@$qt[23][1]++;		  
	  }
	  else
	  {	  
		  $valor[23][$x] ='N';
		  $x++;	
	  } 	 	   
          if($dados[14]==24 or $dados[15]==24)
	  {
		  
		  $valor[24][$z] ='S';
		  $z++;
		@$qt[24][1]++;		  
	  }
	  else
	  {	  
		  $valor[24][$z] ='N';
		  $z++;	
	  } 

          if($dados[15]==25)
	  {
		  
		  $valor[25][$w] ='S';
		  $w++;
		@$qt[25][1]++;		  
	  }
	  else
	  {	  
		  $valor[25][$w] ='N';
		  $w++;	
	  } 
  
  }
$aa=1;
	for($nr=1;$nr<26;$nr++){

		if ($nr==(int)@$dados2[$aa])
	   {
		   $in_sair[$nr]='S';
		   $aa++;
	   }   
	   else{
		   $in_sair[$nr]='N';
		   
	   }
	}	
  
	for ($ii=1; $ii<26;$ii++)
	{
		$sql4  = "Select * FROM regras 
		 WHERE qt_repetiu = ".$qt[$ii][1]." and in_sair = '".$in_sair[$ii]."' and jogo01 = '".$valor[$ii][1]."' and jogo02 = '".$valor[$ii][2].
		 "' and jogo03 = '".$valor[$ii][3]."' and jogo04 = '".$valor[$ii][4]."' and jogo05 = '".$valor[$ii][5]."' and jogo06 = '".$valor[$ii][6].
		 "' and jogo07 = '".$valor[$ii][7]."' and jogo08 = '".$valor[$ii][8]."' and jogo09 = '".$valor[$ii][9]."' and jogo10 = '".$valor[$ii][10]."'";
		$query4 = $mysqli->query($sql4);
		$dados4 = $query4->fetch_array();
		//var_dump($sql4);
 
		 $ins="INSERT INTO regras2 (nr_bola, nr_concurso, regra) VALUES (".$ii.",".$result.",".$dados4['nr_regra' ].")";
			echo '<br><br>';
			print_r($ins);
			mysqli_query($mysqli,$ins);
		   
	}

unset($dados);
unset($dados2);
unset($dados3);
unset($dados4);
unset($ins);
unset($up);
unset($nr);
unset($aa);
mysqli_close($mysqli);	
}
	
?>