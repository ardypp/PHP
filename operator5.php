<?php 
$var1= $_POST['a'];
$var2=$_POST['of'];
$var3= $_POST['b'];

echo "$var1 $var2 $var3 ";
	
	if($var1=="true")
		{	
			$var1=1;
		}else
			{
				$var1=0;	
			}

		if($var3=="true")
		{	
			$var3=1;
		}else
			{
				$var3=0;	
			}


			if($var2=="and")
				{
					if($var1==$var3)
								{echo "=true";}
								else
									{echo "=false";}	
				}
				elseif ($var2=="or") 
						{
							
							
							if ($var1||$var3)

								{echo "=true";}	
								else
									{echo "=else";}
							
						}
						elseif ($var2=="xor") 	
						{
							if($var1^$var3)
								{echo "=true";}
								else
									{echo "=false";}	
							
						}							
						else{	

					 				if($var1!= $var3)
										{echo "=true";}
										else
											{echo "=false";}	
												
											
							}									


?>