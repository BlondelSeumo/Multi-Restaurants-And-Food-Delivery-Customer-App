<?php 
function update()
{
	$data = array();
	//for dir
	
	

	$data[]=array(
		'type'=>'file',
		'file'=>'uploads/update/v2.2/api.php',
		'root'=>base_path().'/routes/api.php'
	);

	$data[]=array(
		'type'=>'file',
		'file'=>'uploads/update/v2.2/Location.php',
		'root'=>base_path().'/app/Location.php'
	);

	$data[]=array(
		'type'=>'dir',
		'file'=>'uploads/update/v2.2/Api/',
		'root'=>base_path().'/app/Http/Controllers/Api'
	);

	

	return $data;
}


?>