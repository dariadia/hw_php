<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/engine/modal.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить отзыв</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--                ------->

                    <input name="username" type="text" class="m-3 form-control" placeholder="Имя пользователя">
                    <input name="text" type="text" class="m-3 form-control" placeholder="Отзыв">
                    <input name="date" type="date" class="m-3 form-control" placeholder="Дата">

                    <!--                ------>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary " type="submit">Добавить отзыв</button>

            </form>

        </div>
    </div>
</div>
</div>