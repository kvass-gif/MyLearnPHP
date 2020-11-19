<div class="row">
    <div class="col-9">
        <h3 class="my-4">Shopping Cart</h3>
        <?php
        if (count($cartProducts) > 0) : ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <?php require_once 'table.view.php' ?>
                <?php require_once 'buttons.view.php' ?>
            </form>
        <?php else : ?>
            <?php require_once 'empty.view.php' ?>
        <?php endif ?>
    </div>
    <div class="col-3">
        <?php require_once 'suggest.view.php' ?>
    </div>
</div>