<?php
header('Content-Type: application/json');
session_start();

// Ensure user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawInput = file_get_contents('php://input');
    $decoded = json_decode($rawInput, true);
    
    if ($decoded !== null && isset($decoded['email'], $decoded['phone'])) {
        $filePath = __DIR__ . '/../data/settings.json';
        if (file_put_contents($filePath, json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
            echo json_encode(['success' => true]);
            exit;
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Failed to write to file']);
            exit;
        }
    }
}

http_response_code(400);
echo json_encode(['error' => 'Invalid request']);
exit;
