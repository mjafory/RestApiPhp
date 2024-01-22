<?php

header("Access-Control-Allow-Origin: *");

include('function.php');

$data = json_decode(file_get_contents('php://input'));

$requestMethod = $_SERVER["REQUEST_METHOD"];


if ($requestMethod === "GET") {
    $retriveData = getData();
    echo $retriveData;
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . ' Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}


?>
