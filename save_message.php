<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $car = $_POST['car'] ?? 'unknown';
    $name = $_POST['name'] ?? 'anonymous';
    $message = $_POST['message'] ?? '';

    if (empty($message)) {
        echo "Message is required.";
        exit;
    }

    $log = date('Y-m-d H:i:s') . " | Car: $car | Name: $name | Message: $message\n";
    $filename = __DIR__ . '/messages.txt';
    
    if (file_put_contents($filename, $log, FILE_APPEND) !== false) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to save message.";
    }
} else {
    echo "Invalid request.";
}
