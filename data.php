<?php
header('Content-type: application/x-javascript');
$callback = $_GET["callback"];
$data = $_GET;
//Do stuff with request data
// Include widget file and serve in response
$widget = file_get_contents(__DIR__.'/widget.html');
echo $callback . '('.json_encode($widget) .')';
exit;