<?php

	function tribonacci(Array $arreglo, int $n):Array{
		$resultado = [];
		for ($i=0; $i<$n ; $i++) {
			if($i<3){
				array_push($resultado, $arreglo[$i]);
			}else{
				array_push($resultado, $resultado[$i-3]+$resultado[$i-2]+$resultado[$i-1]);
			}
		}
		return $resultado;

	}

	$test = tribonacci([1,1,1], 10);
	$test1 = tribonacci([0,0,1],10);
	$test2 = tribonacci([0,1,1],10);
	$test3 = tribonacci([1,0,0],10);
	$test4 = tribonacci([0,0,0],10);
	$test5 = tribonacci([1,2,3],10);
	$test6 = tribonacci([3,2,1],10);
	$test7 = tribonacci([1,1,1],1);
	$test8 = tribonacci([300,200,100],0);
	$test9 = tribonacci([0.5,0.5,0.5],30);

	echo json_encode($test);
	echo "<br>";
	echo json_encode($test1);
	echo "<br>";
	echo json_encode($test2);
	echo "<br>";
	echo json_encode($test3);
	echo "<br>";
	echo json_encode($test4);
	echo "<br>";
	echo json_encode($test5);
	echo "<br>";
	echo json_encode($test6);
	echo "<br>";
	echo json_encode($test7);
	echo "<br>";
	echo json_encode($test8);
	echo "<br>";
	echo json_encode($test9);