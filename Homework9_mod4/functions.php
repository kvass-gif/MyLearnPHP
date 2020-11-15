<?php
function pageToOpen()
{
    if (isset($_GET['page'])) {

        $pages = array("products", "cart", "sold");

        if (in_array($_GET['page'], $pages)) {

            $_page = $_GET['page'];
        } else {

            $_page = "products";
        }
    } else {

        $_page = "products";
    }
    return $_page;
}

function initEditSession($link)
{

    // інформація сисії зберігається у вигляді масиву із id товарів і ціни на кожен товар і кількості цих товарів у кошику
    // функція спрацьовує якщо користувач виконав додавання товару до корзини
    // якщо еорзина для користувача не було, тоді вона створюється
    // в іншому випадку здійснюється лише додвання одиниці до існуючої кількості 
    $message = true;
    if (isset($_GET['action']) && $_GET['action'] == "add") {

        $id = intval($_GET['id']);
        // на наступний раз коли буде выдкрий бар він буде із заповнними товарами
        if (isset($_SESSION['cart'][$id])) {

            $_SESSION['cart'][$id]['quantity']++;
        } else {
            // знаходження товару по id
            $sql_s = "SELECT * FROM products WHERE id_product={$id}";
            $query_s = mysqli_query($link, $sql_s);
            if (mysqli_num_rows($query_s) != 0) {
                $row_s = mysqli_fetch_array($query_s);

                $_SESSION['cart'][$row_s['id_product']] = array(
                    "quantity" => 1,
                    "price" => $row_s['price']
                );
            } else {

                $message = false;
            }
        }
    }
    return $message;
}

function getProducts($link)
{
    $sql = "SELECT * FROM products ORDER BY name ASC";
    $result = mysqli_query($link, $sql);
    return $result;
}

function cartBarQuery($link)
{
    $result = false;
    if (isset($_SESSION['cart'])) {

        $sql = "SELECT * FROM products WHERE id_product IN (";

        foreach ($_SESSION['cart'] as $id => $value) {
            $sql .= $id . ",";
        }

        $sql = substr($sql, 0, -1) . ") ORDER BY name ASC";
        $result = mysqli_query($link, $sql);
    }
    return $result;
}


function changeCart()
{
    if (isset($_POST['save']) && isset($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $key => $val) {
            if ($val >= 0) {
                if ($val == 0) {
                    unset($_SESSION['cart'][$key]);
                } else {
                    $_SESSION['cart'][$key]['quantity'] = $val;
                }
            }
        }
    } else if (isset($_POST['clean'])) {
        unset($_SESSION['cart']);
    }
}


function querCart($link)
{
    $sql = "SELECT * FROM products WHERE id_product IN (";
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id => $value) {
            $sql .= $id . ",";
        }
    }

    $sql = substr($sql, 0, -1) . ") ORDER BY name ASC";
    $result = mysqli_query($link, $sql);
    return $result;
}
