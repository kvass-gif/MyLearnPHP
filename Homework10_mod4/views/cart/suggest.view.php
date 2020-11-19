<br>
<div class="card-deck mb-3 text-center mt-3 ml-2">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Suggestions</h4>
        </div>
        <!-- тут може бути 2 варіанта або піти на  -->
        <div class="card-body">
            <?php
            if (false !== $suggested) : ?>
                <img src="http://<?= ASSETS_PATH . "/{$suggested['image']}" ?>" alt=<?= $suggested['name'] ?> width="200">
                <h1 class="card-title pricing-card-title text-danger mt-4">
                    <?= sprintf("$%01.2f", $suggested['price']) ?>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li class="text-muted text-uppercase">
                        <h5><?= $suggested['brand'] ?></h5>
                    </li>
                    <li>
                        <a href="<?= $_SERVER['PHP_SELF'] ?>?action=product&id=<?= $suggested['id'] ?>" title="Go to the product page">
                            <?= $suggested['name'] ?>
                        </a>
                    </li>
                    <li>
                        <small><?= $suggested['color'] ?></small>
                    </li>
                </ul>
                <a href="<?= $_SERVER['PHP_SELF'] ?>?action=add&id=<?= $suggested['id'] ?>" class="btn btn-lg btn-block btn-primary">
                    Add to Cart!
                </a>
            <?php else : ?>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>No suggestions</li>
                </ul>
            <?php endif ?>

        </div>
    </div>
</div>