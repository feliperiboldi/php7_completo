<?php 

$images = scandir("images");
$data = array();

foreach ($images as $img) {
	if(!in_array($img, array(".", ".."))) {

		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);
		$info['size'] = filesize($filename);
		$info['modified'] = Date("d/m/Y H:i:s", filemtime($filename));
		$info['url'] = "http://localhost/php7_completo/DIR/".str_replace("\\", "/", $filename);

		array_push($data, $info);

	}
}

echo json_encode($data);

 ?>