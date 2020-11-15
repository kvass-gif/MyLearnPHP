<h1>View cart</h1>

<form method="post" action="index.php?page=cart" name="someForm">

    <table>

        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Items Price</th>
        </tr>

        <?php $result = querCart($link); ?>
        <?php $totalprice = 0; ?>

        <?php while ($result != false && $row = mysqli_fetch_array($result)) : ?>
            <?php $subtotal = $_SESSION['cart'][$row['id_product']]['quantity'] * $row['price'];
            $totalprice += $subtotal;
            ?>
            <tr>
                <td><img src="<?php echo $row['photo'] ?>" alt="photo" style="height: 50px;"></td>
                <td><?php echo $row['name'] ?></td>
                <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td>
                <td><?php echo $row['price'] ?> UAH</td>
                <td><?php echo $_SESSION['cart'][$row['id_product']]['quantity'] * $row['price'] ?> UAH</td>
            </tr>
        <?php endwhile ?>
        <tr>
            <td colspan="4">Total Price: <?php echo $totalprice ?></td>
        </tr>

    </table>
    <br />
    <button style="margin-bottom: 5px; width: 150px" type="submit" name="continue" onclick="SetAct('products')">Continue Shopping</button>
    <br />
    <button style="margin-bottom: 5px; width: 150px" type="submit" name="save">Save Changes </button>
    <br />
    <button style="margin-bottom: 5px; width: 150px" type="submit" name="clean">Clean Up </button>
    <br />
    <button style="margin-bottom: 5px; width: 150px" type="submit" name="check" onclick="SetAct('sold')">Check Out </button>

</form>

<script>
    var statpart = 'index.php?page=';

    function SetAct(fam) {
        document.someForm.action = statpart + fam;
    }
</script>
<br />
<p>To remove an item, set it's quantity to 0. </p>