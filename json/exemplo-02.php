<?php 

$json = '[{"nome":"Felipe","idade":19},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

 ?>