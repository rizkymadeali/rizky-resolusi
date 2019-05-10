<?php 
$string = "Saya Sendiri";
$array_phpmu = str_split($string);
echo "<table border='1'>
		<tr>";
		$no = 1;
		foreach ($array_phpmu as $p){
			if ($no==1){ $class = "class='awal'"; }else{ $class = "style='border-left:none'"; }
			echo "<td $class>$p</td>";
			$no++;
		}
 
		$total = count($array_phpmu);
		echo "$total";
		if (($total-20)<0){
			for ($i=0; $i < (20-$total) ; $i++) { 
				echo "<td style='border-left:none'>  </td>";
			}
		}
  echo "</tr>
</table>";
?>
