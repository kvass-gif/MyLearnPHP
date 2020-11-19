<?php

define('SESS_CART', 'cart');
define('SESS_PROD', 'products');

function cartIsset()
{
    return isset($_SESSION[SESS_CART]);
}

function cartInit()
{
    $_SESSION[SESS_CART] = [
        SESS_PROD => [
            // id => qty
        ],
    ];
}

function &cartProducts()
{
    return $_SESSION[SESS_CART][SESS_PROD];
}

function cartProductsFilled(array $catalog)
{
    $filled = [];

    $cartProducts = cartProducts();
    
    if (count($cartProducts) > 0) {
        foreach ($cartProducts as $id => $qty) {
            $filled[$id] = (object)[
                'id' => $id,
                'qty' => $qty,
                'info' => (object)$catalog[$id]
            ];
        }
    }

    return $filled;
}

function cartRecalc(array $items)
{
    $cartProducts = &cartProducts();
    
    $cartProducts = array_combine(
        $items['id'],
        $items['qty']
    );

    array_walk($cartProducts, function(&$qty) {
        if ($qty <= 0) {
            $qty = 1;
        }
    });
}

function cartClear()
{
    $products = &cartProducts();
    $products = [];
}

function productExists($id)
{
    $products = cartProducts();
    
    if(count($products) > 0) {
        if (in_array($id, array_keys($products))) {
            return true;
        }
    }

    return false;
}

function productAdd($id, $qty = 1)
{
    $products = &cartProducts();

    if(productExists($id)) {
        $products[$id]++;
    } else {
        $products[$id] = $qty;
    }
}

function productRemove($id)
{
    if(productExists($id)) {
        $products = &cartProducts();
        unset($products[$id]);
        return true;
    }

    return false;
}
