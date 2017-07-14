<?php

function get_images($path){
	$files = scandir($path);
	
	foreach ($files as $key => $value) {
		
		if($value != '.' && $value != '..'){
			if(is_dir($path.'/'.$value)){
				get_images($path.'/'.$value);
			}else{
				$format = pathinfo($path.'/'.$value,PATHINFO_EXTENSION);
				if(in_array($format,['jpg','png','gif','jpeg','swf']))
					echo "<img width = 200px height = 200px src = '$path/$value'>";
			}

		}
	}

}

get_images('example');


?>