<?php
session_start();
require_once 'db-config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['customer'] = [
        'first_name' => $_POST['firstName'],
        'last_name' => $_POST['lastName'],
        'address' => $_POST['address'],
        'city' => $_POST['city'],
        'state' => $_POST['state'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email']
    ];
    
    header('Location: checkout-form2.php');
    exit();
}
?>
