<?php
	$conexao = mysqli_connect("localhost","valnir","nil123456", "LT");
	if (!$conexao) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	set_time_limit(600000);
	$ID = 0;
	
		for ($cont = 1; $cont < 12; $cont++)
		{
			for($cont2 = 2; $cont2 < 13; $cont2++)
			{
			if($cont2 <= $cont)
				{
					continue;
				}																					
	
				for($cont3 = 3; $cont3 < 14; $cont3++)
				{
					if($cont3 <= $cont2)
					{
						continue;
					}																					

					for($cont4 = 4; $cont4 < 15; $cont4++)
					{
					if($cont4 <= $cont3)
					{
						continue;
					}
					
					for($cont5 = 5; $cont5 < 16; $cont5++)
			            {
						if($cont5 <= $cont4)
						{
							continue;
						}
							for($cont6 = 6; $cont6 < 17; $cont6++)
							{
								if($cont6 <= $cont5)
								{
									continue;
								}
								
								for($cont7 = 7; $cont7 < 18; $cont7++)
								{
									if($cont7 <= $cont6)
									{
										continue;
									}
									for($cont8 = 8; $cont8 < 19; $cont8++)
									{
									if($cont8 <= $cont7)
									{
										continue;
									}
										
										for($cont9 = 9; $cont9 < 20; $cont9++)
										{
											if($cont9 <= $cont8)
											{
												continue;
											}
											for($cont10 = 10; $cont10 < 21; $cont10++)
											{
												if($cont10 <= $cont9)
												{
													continue;
												}
												for($cont11 = 11; $cont11 < 22; $cont11++)
												{
													if($cont11 <= $cont10)
													{
														continue;
													}
													for($cont12 = 12; $cont12 < 23; $cont12++)
													{
													if($cont12 <= $cont11)
														{
															continue;
														}
														for($cont13 = 13; $cont13 < 24; $cont13++)
														{
															if($cont13 <= $cont12)
															{
																continue;
															}
															for($cont14 = 14; $cont14 < 25; $cont14++)
															{
															if($cont14 <= $cont13)
															{
															continue;
															}
																for($cont15 = 15; $cont15 < 26; $cont15++)
																{
																if($cont15 <= $cont14)
																{
																continue;
																}
																
														      															
																
																else{
																	
																	if(($cont2 > $cont)  and ($cont3 > $cont2) and ($cont4 > $cont3) and ($cont5 > $cont4) and
																		($cont6 > $cont5)and ($cont7 > $cont6) and ($cont8 > $cont7) and ($cont8 > $cont7) and 
																		($cont9 > $cont8)and ($cont10 > $cont9)and ($cont11> $cont10)and ($cont12> $cont11)and
																	    ($cont13 > $cont12)and ($cont14 > $cont13)and ($cont15 > $cont14))
																	{
																		$ID++;
																		echo $ID.'<br>';
																		$sql = "INSERT INTO probabilidade VALUES ";
																		$sql .= "('$ID','$cont', '$cont2', '$cont3', '$cont4', '$cont5', '$cont6', '$cont7', '$cont8', '$cont9', '$cont10', '$cont11', '$cont12',  '$cont13',  '$cont14',  '$cont15')" ;
																		if (mysqli_query($conexao, $sql)) {
																			echo $ID." New record created successfully";
																		} else {
																			echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
																		}
																	}					
																	
																}}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}

		}
	mysqli_close($conexao);
	echo "Tabela carregada com sucesso"
?>