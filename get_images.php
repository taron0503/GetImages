<?php

function get_images($path){
	$files = scandir($path);
	
	foreach ($files as $name) {
		
		if($name != '.' && $name != '..'){
			if(is_dir($path.'/'.$name)){
				get_images($path.'/'.$name);
			}else{
				$format = pathinfo($path.'/'.$name,PATHINFO_EXTENSION);
				if(in_array($format,['jpg','png','gif','jpeg','swf']))
					echo "<img width = 200px height = 200px src = '$path/$name'>";
			}

		}
	}

}

get_images('example');


?>