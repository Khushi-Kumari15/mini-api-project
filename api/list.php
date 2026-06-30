<?php

header("Content-Type: application/json");

$response = [
    "status" => "Success",
    "tips" => [
        "📖 Study Daily",
        "💻 Practice Coding",
        "📝 Take Notes",
        "📚 Revise Regularly",
        "🎯 Complete Assignments on Time",
        "💡 Learn New Concepts",
        "🚀 Never Give Up"
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);

?>