<?php
$count = 0;
$s = 100;
for($i = 0;$i < $s; $i++){
	$mas[]=rand(1,10);
	print_r($mas[$i] . " ");
}

for($i = 0;$i < $s; $i++){
	if($mas[$i] == $mas[$i + 1]){
	$count++;
    }
}

print_r ('<br/>'."Количество последовательных пародинаковых элементов -".$count);
?>