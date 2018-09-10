<?php

$h=0;
rekursif(5);
function rekursif2($n,$bintang){
global $h;
	if($n>$h-$bintang){
		echo "*";
	rekursif2($n-1,$bintang);
	}
}
function rekursif($bintang){
	global $h;
	rekursif2($h,$bintang);
	echo"<br>";
	if(--$bintang > $h){
		rekursif($bintang);
	}
}


echo"<br>/*================================================================<br><br>";

$angka=5;
function rekursif3($k,$j,$angka){
	if($k<=$angka){
		if($j<=$k){
			echo $j;
			$j++;
			rekursif3($k,$j,$angka);

			}
			else{
				echo"<br>";
				$k++;
				rekursif3($k,1,$angka);
			}

		}
	}
	rekursif3(1,1,$angka);
?>
