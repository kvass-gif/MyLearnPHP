<div class="container">
  <br><br><br>
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">
          <?= $product['name'] ?>
        </h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <img src="http://<?= ASSETS_PATH . "/{$product['image']}" ?>" alt=<?= $product['name'] ?> width="500">
          </div>
          <div class="col-4 text-center">
            <h1 class="card-title pricing-card-title text-danger">
              <?= sprintf("$%01.2f", $product['price']) ?>
            </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-muted text-uppercase">
                <h5><?= $product['brand'] ?></h5>
              </li>
              <li>
                <h3><?= $product['name'] ?></h3>
              </li>
              <li><small><?= $product['color'] ?></small></li>
            </ul>
            <a href="<?= $_SERVER['PHP_SELF'] ?>?action=add&id=<?= $product['id'] ?>" class="btn btn-lg btn-block btn-primary">
              Add to Cart!
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>