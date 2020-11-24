<?php
			function Analisis($butuh, $kompleks, $wkt, $tim, $keter, $klien)
			{
				$Inc=0;
				$V=0;
				$Spiral=0;
				$RAD=0;
				$Proto=0;
				$Scrum=0;
				$XP=0;

				if($butuh=="jls") 
				{
					$V = $V+1;
					$Spiral = $Spiral+1;
					$Proto = $Proto+1;
					$Scrum = $Scrum+1;
					$XP = $XP+1;
				}
				else
				{
					$Inc = $Inc+1;
					$RAD = $RAD+1;
				}

				if($kompleks=="sdrhn")
				{
					$Inc = $Inc+1;
					$XP = $XP+1;
				}
				else if($kompleks=="kmplks")
				{
					$V = $V+1;
					$RAD = $RAD+1;
					$Proto = $Proto+1;
					$Scrum = $Scrum+1;
				}
				else
				{
					$Spiral = $Spiral+1;
				}

				if($wkt=="0")
				{
					$Proto = $Proto+1;
					$XP = $XP+1;
				}
				else if($wkt=="1")
				{
					$Inc = $Inc+1;
					$RAD = $RAD+1;
					$Scrum = $Scrum+1;
				}
				else if($wkt=="2")
				{
					$V = $V+1;
				}
				else
				{
					$Spiral = $Spiral+1;
				}

				if($tim=="dikit")
				{
					$Inc = $Inc+1;
					$Scrum = $Scrum+1;
					$RAD = $RAD+1;
					$Proto = $Proto+1;
					$XP = $XP+1;
				}
				else
				{
					$Spiral = $Spiral+1;
					$V = $V+1;
				}

				if($keter=="krg")
				{
					$pV = $V+1;
					$Spiral = $Spiral+1;
					$RAD = $RAD+1;
					$Proto = $Proto+1;
					$Scrum = $Scrum+1;
				}
				else if($keter=="biasa")
				{
					$Inc = $Inc+1;
					$XP = $XP+1;
				}
				else{}

				if($klien=="ya")
				{
					$Inc = $Inc+1;
					$Spiral = $Spiral+1;
					$RAD = $RAD+1;
					$Proto = $Proto+1;
					$Scrum = $Scrum+1;
					$XP = $XP+1;					
				}
				else
				{
					$V = $V+1;
				}

		$jumlah = array("Prototyping"=>$Proto,"Incremental"=>$Inc,"VShaped"=>$V,"Spiral"=>$Spiral,"RAD"=>$RAD, "Scrum"=>$Scrum,"XP"=>$XP);
		arsort($jumlah);
		$hasil = array_splice($jumlah,0,3);
		return $hasil;
	}
?>