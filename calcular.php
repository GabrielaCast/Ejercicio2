<?php
			$y=$_POST["a"];
			$z=$_POST["b"];
			if(isset($_POST['btsuma']))
			{
				$c=$y+$z;
				echo "$y + $z es ".$c;
			}
			if(isset($_POST['btresta']))
			{
				$c=$y-$z;
				echo "$y - $z es ".$c;
			}
			if(isset($_POST['btmult']))
			{
				$c=$y*$z;
				echo "$y * $z es ".$c;
			}
			if(isset($_POST['btdiv']))
			{
				if($z!=0)
				{
					$c=$y/$z;
				}
				else
				{
					$c=0;
				}
				echo "$y / $z es".$c;
			}
?>