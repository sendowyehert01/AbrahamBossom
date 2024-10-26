<?php
// sendNotification.php

//Load Composer's autoloader
require base_path('vendor/autoload.php');

// Set headers for JSON response
header('Content-Type: application/json');

try {
    // Initialize Pusher
    $pusher = new Pusher\Pusher(
        '000f37df564364d3eeac',  
        '4d9fc3a03efe1959af1a',  
        '1885932',               
        [
            'cluster' => 'ap1',
            'useTLS' => true
        ]
    );

    // Get and validate input
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (!$data || !isset($data['message'])) {
        http_response_code(400);
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid request: message is required'
        ]);
        exit;
    }

    // Sanitize message
    $message = htmlspecialchars(strip_tags($data['message']));

    // Trigger the notification
    $result = $pusher->trigger('payment-channel', 'pending-payment', [
        'message' => $message,
        'timestamp' => date('Y-m-d H:i:s')
    ]);

    // Send success response
    http_response_code(200);
    echo json_encode([
        'status' => 'success',
        'message' => 'Notification sent successfully'
    ]);

} catch (Exception $e) {
    // Log error
    error_log("Notification Error: " . $e->getMessage());
    
    // Send error response
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to send notification'
    ]);
}