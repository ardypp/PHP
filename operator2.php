<?php 
$var1= $_POST['a'];
$var2=$_POST['of'];
$var3= $_POST['b'];

if($var1!=0&&$var3!=0)
{
if($var2=="+")
	{
		$hasil= $var1+$var3;
		echo "$var1 + $var3=$hasil";
	}
	elseif ($var2=="-") 
			{
				$hasil= $var1-$var3;
				echo "$var1 - $var3=$hasil";
			}
			elseif ($var2=="/")
					{
						$hasil= $var1/$var3;
						echo "$var1 / $var3=$hasil";
					}
					elseif ($var2=="*") 
							{
								$hasil= $var1*$var3;
								echo "$var1 * $var3=$hasil";		
							}
}
else
{echo "Angka belum diisi";}

 ?>