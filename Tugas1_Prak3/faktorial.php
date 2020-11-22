<?php
	function faktorial($n){
		if($n == 1){
			return $n;
		}else{
			return $n * faktorial($n-1);
		}
	}
	
	$nilai = 7;
	echo "<h3> Menghitung Faktorial </h3>";
	echo " Hasil Faktorial ".$nilai."! = ".faktorial($nilai);
?> 
