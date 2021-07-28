<?php
/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120
 */
 function faktorial ($number){
	$result = 1;
	 for($i=$number; $i >= 1 ; $i--){
		 $result = $result * $i;
	 }
	  //return $fresult;
	  echo "Faktorial of $number is $result";
	}
// echo "Faktorial of 10 is " . faktorial(10);
echo faktorial(5);

?>