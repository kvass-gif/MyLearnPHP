<?php

function render($page, array $data = [])
{
    $data['viewPage'] = $page;

    extract($data);
    require_once __DIR__ . "/views/layouts/master.view.php";
}

function getSuggested(array &$products, array $cartProducts = [])
{
    if (count($products) > 0) {
        if (count($cartProducts) > 0) {
            do {
                $id = array_rand($products, 1);
            } while (array_key_exists($id, $cartProducts));
        } else {
            $id = array_rand($products, 1);
        }

        return array_merge(
            ['id' => $id],
            $products[$id]
        );
    }

    return false;
}
function ToOrder(&$order, $products)
{
    foreach ($_SESSION['cart']['products'] as $id => $qty) {
        $order['goods'][$id] = $products[$id]["name"];
        $order['qty'][$id] =  $qty;
        $order['price'][$id] = $products[$id]['price'];
    }
    $order['name'] = 'buying shoes';
    $order['clFirstName'] = $_POST['firstName'];
    $order['clLastName'] = $_POST['lastName'];

    $order['totalPrice'] = 0;
    foreach ($order['qty'] as $id => $one)
        $order['totalPrice'] += $order['price'][$id] * $one;

    $order['orderDate'] = date("d.m.y");
}
function writeToJson($order)
{
    if (file_exists('orders.json')) {
        $inp = file_get_contents('orders.json');
        $tempArray = json_decode($inp);
        $order['id'] = end($tempArray)->id + 1;
    } else {
        $order['id'] = 0;
    }

    $tempArray[] = $order;

    $jsonData = json_encode($tempArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents('orders.json', $jsonData);
}
