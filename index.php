<?php
session_start();

require './handlers/homeHandler.php';
require './handlers/loginHandler.php';
require './handlers/registerHandler.php';
require './handlers/productHandler.php';
require './handlers/contactHandler.php';
require './handlers/paymentHandler.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

if (isset($_GET['search'])) {
    $action = 'listProducts';
}

switch ($action) {
    case 'home':
        home();
        break;
    case 'login':
        loginView();
        break;
    case 'register':
        registerView();
        break;
    case 'registerAttempt':
        registerAttempt();
        break;
    case 'loginAttempt':
        loginAttempt();
        break;
    case 'logout':
        logout();
        break;
    case 'listProducts':
        include_once './handlers/productHandler.php';
        $products = getProducts();
        include './views/product-list.php';
        break;
    case 'gotoPayment':
        include_once './handlers/paymentHandler.php'; 
        showPaymentPage();
        break;
    case 'confirmPayment': 
        include_once './handlers/paymentHandler.php'; 
        confirmPayment();
        break;
    case 'contact':
        contact();
        break;
    default:
        home();
}

?>