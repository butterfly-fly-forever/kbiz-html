<?php
header('Content-Type: application/json');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$filePath = __DIR__ . '/../data/messages.json';

// Case 1: Admin is logged in -> can overwrite the entire messages list (e.g. mark read/delete)
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rawInput = file_get_contents('php://input');
        $decoded = json_decode($rawInput, true);
        if ($decoded !== null) {
            if (file_put_contents($filePath, json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
                echo json_encode(['success' => true]);
                exit;
            }
        }
    }
} else {
    // Case 2: Public visitor -> can only append a single contact message
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rawInput = file_get_contents('php://input');
        $newMsg = json_decode($rawInput, true);
        
        if ($newMsg !== null && isset($newMsg['firstName'], $newMsg['lastName'], $newMsg['email'])) {
            $messages = [];
            if (file_exists($filePath)) {
                $messages = json_decode(file_get_contents($filePath), true) ?: [];
            }
            $messages[] = $newMsg;
            if (file_put_contents($filePath, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
                echo json_encode(['success' => true]);
                exit;
            } else {
                http_response_code(500);
                echo json_encode(['error' => 'Failed to write data']);
                exit;
            }
        }
    }
}

http_response_code(400);
echo json_encode(['error' => 'Invalid request']);
exit;
