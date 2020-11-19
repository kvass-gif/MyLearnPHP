<!--Main layout-->

<div class="container wow fadeIn">

    <!-- Heading -->
    <h2 class="my-5 h2 text-center">Checkout form</h2>

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="card-body">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-2">

                            <!--firstName-->
                            <div class="md-form ">
                                <label for="firstName" class="">First name</label>
                                <input type="text" name="firstName" class="form-control">
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-2">

                            <!--lastName-->
                            <div class="md-form">
                                <label for="lastName" class="">Last name</label>
                                <input type="text" name="lastName" class="form-control">
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submitCheck">Continue to checkout</button>

                    </action=>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <!-- Heading -->
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill"><?= count($cartProducts) ?></span>
            </h4>

            <!-- Cart -->
            <ul class="list-group mb-3 z-depth-1">

                <?php $total = 0;
                foreach ($cartProducts as $product) : ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?= $product->info->name ?></h6>
                            <small class="text-muted">Price per one: $<?= $product->info->price ?></small>
                            <br>
                            <small class="text-muted">Quantity: <?= $product->qty ?></small>
                        </div>
                        <span class="text-muted">$<?= $product->info->price *  $product->qty ?></span>
                        <?php $total += $product->info->price *  $product->qty; ?>
                    </li>
                <?php endforeach ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$<?= $total ?> </strong>
                </li>
            </ul>
            <!-- Cart -->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</div>

<!--Main layout-->