<?php
header('Content-Type: application/json');

// যদি "gmail" প্যারামিটার না থাকে
if(!isset($_GET['gmail'])){
    echo json_encode([
        "status" => "error",
        "message" => "আগে প্যারামিটার দিন!",
        "api_owner" => "alvi",
        "telegram_channel" => "@DADUVAIR"
    ]);
    exit;
}

// প্যারামিটার থাকলে ইমেইল চেক
$email = $_GET['gmail'];

// ইমেইল ফরম্যাট চেক
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo json_encode([
        "status" => "success",
        "message" => "ইমেইল ঠিক আছে!",
        "email" => $email,
        "api_owner" => "alvi",
        "telegram_channel" => "@DADUVAIR"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "ইমেইল ফরম্যাট ভুল!",
        "email" => $email,
        "api_owner" => "alvi",
        "telegram_channel" => "@DADUVAIR"
    ]);
}
?>