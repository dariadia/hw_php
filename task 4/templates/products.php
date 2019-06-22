<div class="card-deck">
    <?php foreach ($products as $product) : ?>

        <div class="card" style="width: 18rem; margin: 30px; ">
            <button type="button" class="ml-3 mb-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 0px!important">
                <img src="<?= 'public/img/' . $product['src'] ?>" class="card-img-top" alt="...">
            </button>

            <div class="card-body">
                <h5 class="card-title"><?= $product['good_name']  ?></h5>
                <p class="card-text"><?= $product['good_price']  ?> р</p>
            </div>
        </div>

    <?php endforeach ?>

</div>