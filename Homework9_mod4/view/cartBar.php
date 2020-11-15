<h1>Cart</h1>
<?php $result = cartBarQuery($link) ?>
<?php if ($result == false)  echo "<p>Your Cart is empty. Please add some products.</p>"; ?>
<?php while ($result == true && $row = mysqli_fetch_array($result)) : ?>
    <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p>
<?php endwhile ?>
<hr />
<button onclick="goToCart()">Go to Cart</button>

<script type="text/javascript">
    function goToCart() {
        var local = 'http://localhost:8080/Homework/Homework9_mod4/index.php?page=cart';
        document.location.href = local;
    }
</script>