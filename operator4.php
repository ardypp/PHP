<?php 
$var1= $_POST['a'];
$var2=$_POST['of'];
$var3= $_POST['b'];

if($var1!=0&&$var3!=0)
{
if($var2=="==")
	{
		if($var1==$var3)
			echo "$var1 == $var3= true";
		else
			echo "$var1 == $var3= false";
	}
	elseif ($var2=="<") 
			{
				if($var1<$var3)
					echo "$var1 < $var3= true";
				else
					echo "$var1 < $var3= false";
			}
			elseif ($var2==">")
					{
						if($var1>$var3)
							echo "$var1 > $var3= true";
						else
							echo "$var1 > $var3= false";
					}
					elseif ($var2=="<=") 
							{
								if($var1<=$var3)
									echo "$var1 <= $var3= true";
								else
									echo "$var1 <= $var3= false";		
							}
							elseif ($var2==">=") 
									{
										if($var1>=$var3)
											echo "$var1 >= $var3= true";
										else
											echo "$var1 >= $var3= false";			
									}
									elseif ($var2=="!=") 
											{
												if($var1!=$var3)
													echo "$var1 != $var3= true";
												else
													echo "$var1 != $var3= false";		
											}
}
else
{echo "Angka belum diisi";}

 ?>