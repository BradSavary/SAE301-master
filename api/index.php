<?php
require_once "Controller/ProductController.php";
require_once "Controller/CategoryController.php";
require_once "Class/HttpRequest.php";


/** IMPORTANT
 * 
 *  De part le .htaccess, toutes les requêtes seront redirigées vers ce fichier index.php
 * 
 *  On pose le principe que toutes les requêtes, pour être valides, doivent être dee la forme :
 * 
 *  http://.../api/ressources ou  http://.../api/ressources/{id}
 * 
 *  Par exemple : http://.../api/products ou  http://.../api/products/3
 */



/**
 *  $router est notre "routeur" rudimentaire.
 * 
 *  C'est un tableau associatif qui associe à chaque nom de ressource 
 *  le Controller en charge de traiter la requête.
 *  Ici ProductController est le controleur qui traitera toutes les requêtes ciblant la ressource "products"
 *  On ajoutera des "routes" à $router si l'on a d'autres ressource à traiter.
 */
$router = [
    "products" => new ProductController(),
    "categorys" => new CategoryController(),
];

// objet HttpRequest qui contient toutes les infos utiles sur la requêtes (voir class/HttpRequest.php)
$request = new HttpRequest();

// on récupère la ressource ciblée par la requête
$route = $request->getRessources();

if ( isset($router[$route]) ){ // si on a un controleur pour cette ressource
    $ctrl = $router[$route];  // on le récupère
    $json = $ctrl->jsonResponse($request); // et on invoque jsonResponse pour obtenir la réponse (json) à la requête (voir class/Controller.php et ProductController.php)
    if ($json){ 
        header("Content-type: application/json;charset=utf-8");
        echo $json;
    }
    else{
        http_response_code(404); // en cas de problème pour produire la réponse, on retourne un 404
    }
    die();
}
http_response_code(404); // si on a pas de controlleur pour traiter la requête -> 404




     function addToCart($productId, $quantity) {
        if (!isset($_COOKIE['cart'])) {
            $cart = [];
        } else {
            $cart = json_decode($_COOKIE['cart'], true);
        }

        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 30 days expiration
        $_COOKIE['cart'] = json_encode($cart); // Update the $_COOKIE superglobal
    }

     function getCart() {
        if (!isset($_COOKIE['cart'])) {
            return [];
        }

        $cart = json_decode($_COOKIE['cart'], true);
        $products = [];

        foreach ($cart as $productId => $quantity) {
            $product = $this->find($productId);
            if ($product) {
                $products[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $product->getPrice() * $quantity
                ];
            }
        }

        return $products;
    }

     function removeFromCart($productId) {
        if (!isset($_COOKIE['cart'])) {
            return;
        }

        $cart = json_decode($_COOKIE['cart'], true);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 30 days expiration
        $_COOKIE['cart'] = json_encode($cart); // Update the $_COOKIE superglobal
    }

     function updateCartQuantity($productId, $quantity) {
        if (!isset($_COOKIE['cart'])) {
            return;
        }

        $cart = json_decode($_COOKIE['cart'], true);

        if (isset($cart[$productId])) {
            $cart[$productId] = $quantity;
        }

        setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // 30 days expiration
        $_COOKIE['cart'] = json_encode($cart); // Update the $_COOKIE superglobal
    }

     function getCartTotal() {
        $products = $this->getCart();
        $total = 0;

        foreach ($products as $item) {
            $total += $item['subtotal'];
        }

        return $total;
    }

     function find($productId) {
        // Dummy implementation for the sake of example
        // Replace this with actual product lookup logic
        return (object) [
            'id' => $productId,
            'getPrice' => function() { return 10; } // Dummy price
        ];
    }


// Example usage

addToCart(1, 2);
die();
?>
