<table class="table table-sm">
    <thead>
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Qty</th>
            <th scope="col">Price</th>
            <th scope="col">Total</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php $subTotal = 0 ?>
        <?php foreach ($cartProducts as $product) : ?>
            <tr>
                <td class="text-center">
                    <img src="http://<?= ASSETS_PATH . "/{$product->info->image}" ?>" alt="<?= $product->info->name ?>" width="120">
                </td>
                <td>
                    <a href="<?= $_SERVER['PHP_SELF'] ?>?action=product&id=<?= $product->id ?>" title="Go to the product page">
                        <?= $product->info->name ?>
                    </a><br>
                    <small class="text-muted text-uppercase">
                        <?= $product->info->brand ?>
                    </small>
                </td>
                <td>
                    <div class="form-group">
                        <!--  col-md-4 -->
                        <input type="hidden" name="items[id][]" value="<?= $product->id ?>">
                        <input type="number" name="items[qty][]" value="<?= $product->qty ?>" step="1" size="5">
                    </div>
                </td>
                <td>
                    <span class="text-info">
                        <?= sprintf("$%01.2f", $product->info->price) ?>
                    </span>
                </td>
                <td>
                    <span class="text-success">
                        <?php $productTotal = $product->info->price * $product->qty ?>
                        <?php $subTotal += $productTotal ?>
                        <?= sprintf("$%01.2f", $productTotal) ?>
                    </span>
                </td>
                <td>
                    <a href="<?= $_SERVER['PHP_SELF'] ?>?action=remove&id=<?= $product->id ?>" class="text-danger">X</a>
                </td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="6" class="text-right">
                SubTotal: <span class="text-right font-weight-bold text-success">
                    <?= sprintf("$%01.2f", $subTotal) ?>
                </span>
            </td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>