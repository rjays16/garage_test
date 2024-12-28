<?php

session_start();
if (!isset($_SESSION['customer'])) {
    header('Location: process-information.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Payment Information | Mass Garage Doors Expert</title>
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
            <h2 class="page-title">Payment Information</h2>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 66%"></div>
            </div>
            
            <form action="process-checkout.php" method="POST">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="cardType" class="form-label">Card Type</label>
                        <select class="form-select" id="cardType" name="cardType" required>
                            <option value="">Choose...</option>
                            <option value="1">Visa</option>
                            <option value="2">MasterCard</option>
                            <option value="3">American Express</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                    </div>
                    <div class="col-md-6">
                        <label for="expDate" class="form-label">Expiration Date</label>
                        <input type="text" class="form-control" id="expDate" name="expDate" placeholder="MM/YY" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cvv" class="form-label">CVV2</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" required>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-between">
                    <a href="checkout-form1.php" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Review Order</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>