<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51SOeDH3JwzRXuXApkAu0EvP92PnvkEMsaNv7SQPUFnB88rtd6VjoDinWmAPoqzcILwe1vkhzKMdslb0Wkjcu6R8r00yPiBrzaB');

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['amount']) || !is_numeric($input['amount']) || $input['amount'] <= 0) {
    echo json_encode(['error' => 'Invalid amount']);
    exit;
}

try {
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => (int)$input['amount'], // amount in cents
        'currency' => 'usd',
        'automatic_payment_methods' => ['enabled' => true],
    ]);

    echo json_encode(['clientSecret' => $paymentIntent->client_secret]);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
