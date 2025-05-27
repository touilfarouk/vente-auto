<?php
$filename = __DIR__ . '/messages.txt';

if (file_exists($filename)) {
    $messages = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    $messages = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller Messages</title>
    <style>
        body { font-family: Arial; padding: 2rem; background: #f0f0f0; }
        .msg-box { background: white; padding: 1rem; margin-bottom: 1rem; border-radius: 5px; box-shadow: 0 0 5px #ccc; }
    </style>
</head>
<body>
    <h2>Messages Received</h2>

    <?php if (empty($messages)): ?>
        <p>No messages yet.</p>
    <?php else: ?>
        <?php foreach ($messages as $msg): ?>
            <div class="msg-box"><?= htmlspecialchars($msg) ?></div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
