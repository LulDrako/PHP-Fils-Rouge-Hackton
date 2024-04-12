<?php
session_start();

require './handlers/addProductHandler';
require './handlers/homeHandler.php';
require './handlers/loginHandler.php';
require './handlers/registerHandler.php';
require './handlers/productHandler.php';
require './handlers/contactHandler.php';
require './handlers/paymentHandler.php';
require './handlers/productDetailHandler.php';

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
        listProducts();
        break;
    case 'gotoPayment':
        showPaymentPage();
        break;
    case 'confirmPayment': 
        confirmPayment();
        break;
    case 'contact':
        contact();
        break;
    case 'addProductForm':
        addProductForm();
        break;
    case 'addProduct':
        addProduct();
        break;
    case 'productDetail':
        productDetail();
        break;
    case 'deleteProduct':
        deleteProduct();
        break;
        case 'editProductForm':
            $productId = $_GET['id'] ?? null;
            if ($productId) {
                editProductForm($productId);
            } else {
                // Gérer le cas où aucun ID de produit n'est fourni
                echo "Aucun ID de produit fourni.";
            }
            break;
        
        case 'editProduct':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $productId = $_POST['id'] ?? null;
                if ($productId) {
                    $productData = [
                        'product_name' => $_POST['product_name'] ?? null,
                        'description' => $_POST['description'] ?? null,
                        'price' => $_POST['price'] ?? null,
                        'stock' => $_POST['stock'] ?? null,
                        'category' => $_POST['category'] ?? null,
                        'image_url' => $_POST['image_url'] ?? null,
                    ];
                    editProduct($productId, $productData);
                } else {
                    // Gérer le cas où aucun ID de produit n'est fourni
                    echo "Aucun ID de produit fourni.";
                }
            } else {
                // Gérer le cas où la méthode de requête n'est pas POST
                echo "Méthode de requête non autorisée.";
            }
            break;
        
    default:
        home();
        break;
}
?>
