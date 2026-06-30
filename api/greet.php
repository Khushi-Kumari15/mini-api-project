<?php

header("Content-Type: application/json");

$name = isset($_GET['name']) ? trim($_GET['name']) : "";

$name = htmlspecialchars($name);

if($name==""){
    echo json_encode([
        "status"=>"error",
        "message"=>"Please enter your name."
    ],JSON_PRETTY_PRINT);
    exit;
}

$data=[
    "status"=>"success",
    "message"=>"Hello $name 👋",
    "wish"=>"Welcome to Mini API Project.",
    "developer"=>"Khushi Kumari"
];

echo json_encode($data,JSON_PRETTY_PRINT);

?>