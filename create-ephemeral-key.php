<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51SOeDH3JwzRXuXApkAu0EvP92PnvkEMsaNv7SQPUFnB88rtd6VjoDinWmAPoqzcILwe1vkhzKMdslb0Wkjcu6R8r00yPiBrzaB'); // Replace with your secret key

header('Content-Type: application/json');

try {
    // Receive the customer ID from your app
    $input = json_decode(file_get_contents('php://input'), true);
    $customerId = $input['customer_id'] ?? null;

    if (!$customerId) {
        echo json_encode(['error' => 'Missing customer ID']);
        exit;
    }

    // Create ephemeral key
    $ephemeralKey = \Stripe\EphemeralKey::create(
        ['customer' => $customerId],
        ['stripe_version' => '2024-06-20'] // Use the latest Stripe API version
    );

    echo json_encode([
        'ephemeralKey' => $ephemeralKey->secret
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
=
