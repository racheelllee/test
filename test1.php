<?php

	for($i=1; $i<=100; $i++){
		if(fmod($i, 3)==0 && fmod($i, 5)==0){
			echo 'invivox';
			echo "<br>";
		}elseif(fmod($i, 3)==0){
				echo 'invi';
				echo "<br>";
		}elseif (fmod($i, 5)==0){
				echo 'vox';
				echo "<br>";
		}else{
			echo $i;
			echo "<br>";
		}
		
	}

