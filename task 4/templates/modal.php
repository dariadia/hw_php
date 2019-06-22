<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/engine/modal.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $product['good_name']  ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card-body">
                        <img src="<?= 'public/img/' . $product['src'] ?>" class="card-img-top" alt="...">
                        <p class="card-text"><?= $product['good_description']  ?></p>
                        <p class="card-text"><?= $product['good_price']  ?> р</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </form>

        </div>
    </div>
</div>
</div>