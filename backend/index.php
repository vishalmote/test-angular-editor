<?php
header("Access-Control-Allow-Origin: *");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo json_encode([
    'status' => true,
    'originalName' => 'banana.jpeg',
    'generatedName' => 'banana.jpeg',
    'msg' => "Image upload successful",
    'imageUrl' => 'http://localhost:8000/banana.jpeg'
]);
