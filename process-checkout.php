<?php

session_start();
require_once 'db-config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['payment'] = [
        'card_type' => $_POST['cardType'],
        'card_number' => $_POST['cardNumber'],
        'card_exp_date' => $_POST['expDate']
    ];
    
    $stmt = $pdo->prepare("INSERT INTO customers (first_name, last_name, address, city, state, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_SESSION['customer']['first_name'],
        $_SESSION['customer']['last_name'],
        $_SESSION['customer']['address'],
        $_SESSION['customer']['city'],
        $_SESSION['customer']['state'],
        $_SESSION['customer']['phone'],
        $_SESSION['customer']['email']
    ]);
    
    $customerId = $pdo->lastInsertId();
    
    $stmt = $pdo->prepare("INSERT INTO payments (card_type, card_number, card_exp_date) VALUES (?, ?, ?)");
    $stmt->execute([
        $_SESSION['payment']['card_type'],
        $_SESSION['payment']['card_number'],
        $_SESSION['payment']['card_exp_date']
    ]);
    
    header('Location: checkout-review.php');
    exit();
}
?>