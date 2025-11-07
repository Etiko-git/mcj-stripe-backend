<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stripe Test - MCJ</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    h1 {
      color: #333;
      margin-bottom: 20px;
    }
    .btn {
      display: inline-block;
      background: #6772e5;
      color: white;
      padding: 12px 20px;
      margin: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }
    .btn:hover {
      background: #5469d4;
    }
    p {
      color: #555;
      max-width: 400px;
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>Welcome to MCJ Stripe Test</h1>
  <p>Use the buttons below to test your backend Stripe integration.</p>

  <button class="btn" onclick="window.location.href='create-payment-intent.php'">
    Create Payment Intent
  </button>

  <button class="btn" onclick="window.location.href='create-ephemeral-key.php'">
    Create Ephemeral Key
  </button>

</body>
</html>
