<?php

if (isset($_GET['action'])) {

    if ('add' === $_GET['action']) {
        $id = (int)$_GET['id'];
        productAdd($id);
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if ('remove' === $_GET['action']) {
        $id = (int)$_GET['id'];
        productRemove($id);
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if ('product' === $_GET['action']) {
        $id = (int)$_GET['id'];
        render('product/show', [
            'product' => array_merge(
                ['id' => $id],
                $products[$id]
            )
        ]);
        exit;
    }
}

if (isset($_POST['submitBtn'])) {
    if ('save' === $_POST['submitBtn']) {
        cartRecalc($_POST['items']);
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if ('clean-all' === $_POST['submitBtn']) {
        cartClear();
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if ('randomly' === $_POST['submitBtn']) {
        foreach (array_rand($products, rand(3, 6)) as $id) {
            productAdd($id, rand(1, 3));
        }
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    if ('checkout' === $_POST['submitBtn']) {
        render('cart/checkout', [
            'cartProducts' => cartProductsFilled($products)
        ]);
        exit;
    }
}

if (isset($_POST['submitCheck'])) {

    $order = [];
    ToOrder($order, $products);
    writeToJson($order);
}
