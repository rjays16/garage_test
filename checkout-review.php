<?php

session_start();
if (!isset($_SESSION['customer']) || !isset($_SESSION['payment'])) {
    header('Location: checkout-form1.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Review Order | Mass Garage Doors Expert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="header">
        <?php include("header.php"); ?>
    </div>
    <?php include("navbar.php"); ?>

    <div class="container">
        <div class="checkout-container">
            <br>
            <h2 class="page-title">Review Your Information</h2>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <h3>Personal Information</h3>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['customer']['first_name'] . ' ' . $_SESSION['customer']['last_name']); ?></p>
                    <p><strong>Address:</strong> <?php echo htmlspecialchars($_SESSION['customer']['address']); ?></p>
                    <p><strong>City:</strong> <?php echo htmlspecialchars($_SESSION['customer']['city']); ?></p>
                    <p><strong>State:</strong> <?php echo htmlspecialchars($_SESSION['customer']['state']); ?></p>
                    <p><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['customer']['phone']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['customer']['email']); ?></p>
                </div>
                <div class="col-md-6">
                    <h3>Payment Information</h3>
                    <p><strong>Card Type:</strong> <?php 
                        $cardTypes = [1 => 'Visa', 2 => 'MasterCard', 3 => 'American Express'];
                        echo htmlspecialchars($cardTypes[$_SESSION['payment']['card_type']]); 
                    ?></p>
                    <p><strong>Card Number:</strong> **** **** **** <?php echo substr($_SESSION['payment']['card_number'], -4); ?></p>
                    <p><strong>Expiration Date:</strong> <?php echo htmlspecialchars($_SESSION['payment']['card_exp_date']); ?></p>
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-between">
                <a href="checkout-form2.php" class="btn btn-secondary">Back</a>
                <button type="button" class="btn btn-primary" onclick="window.location.href='process-order.php'">Confirm Order</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
