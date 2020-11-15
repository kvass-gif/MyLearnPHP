<h1>Product List</h1>
<?php if ($message == false) echo "<h2>$message</h2>"; ?>

<?php $result = getProducts($link); ?>
<?php while ($row = mysqli_fetch_array($result)) : ?>
    <div>
        <h3><?php echo $row['name'] ?></h3>
        <img src=<?php echo $row['photo'] ?> alt=" photo" style="height:200px;float: left; position:relative; margin: 10px" />
        <p style="display: block; height:200px;"><?php echo $row['description'] ?></p>
        <br>
        <span> Price: <?php echo $row['price'] ?> UAH</span>
        <br>
        <button onclick="goToPage(<?php echo $row['id_product'] ?>)">Add to cart</button>

    </div>
    <hr>
<?php endwhile ?>

<script type="text/javascript">
    function goToPage(url) {
        console.log(local + url);
        var local = 'http://localhost:8080/Homework/Homework9_mod4/index.php?page=products&action=add&id=';

        document.location.href = local + url;
    }
</script>