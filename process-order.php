<?php
session_start();

if (!isset($_SESSION['customer']) || !isset($_SESSION['payment'])) {
    header('Location: checkout-form1.php');
    exit();
}

require_once 'db-config.php';

try {
    $pdo->beginTransaction();
    $pdo->commit();
    
    unset($_SESSION['customer']);
    unset($_SESSION['payment']);
    
    $_SESSION['order_success'] = true;
    
} catch (Exception $e) {
    $pdo->rollBack();
    $_SESSION['order_error'] = "An error occurred while processing your order. Please try again or contact support.";
    header('Location: checkout-review.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation | Mass Garage Doors Expert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .confirmation-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 40px auto;
            max-width: 800px;
            text-align: center;
        }
        .success-icon {
            color: #28a745;
            font-size: 64px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #ffca2c;
            border-color: #ffca2c;
            color: #000;
        }
        .page-title {
            color: #333;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php include("header.php"); ?>
    </div>
    <?php include("navbar.php"); ?>

    <div class="container">
        <div class="confirmation-container">
            <i class="bi bi-check-circle-fill success-icon"></i>
            <h2 class="page-title">Thank You for Your Order!</h2>
            <p class="lead mb-4">Your order has been successfully processed.</p>
            <p class="mb-4">We will send a confirmation email shortly with your order details.</p>
            <p class="mb-4">If you have any questions about your order, please contact us at 888-989-8758.</p>
            <div class="mt-4">
                <a href="index.php" class="btn btn-primary">Return to Home</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>