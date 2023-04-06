<?php
header('Content-type: application/json');
$data = $_POST;
//Do stuff with request
echo json_encode(['submitted' => true, 'data' => $data]);
exit;