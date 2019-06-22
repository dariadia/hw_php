<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Отзыв</th>
            <th scope="col">дата</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($reviews as $review) : ?>
            <tr>
                <th scope="row"><?= $review['id'] ?></th>
                <td><?= $review['username'] ?></td>
                <td style="width: 500px"><?= $review['text'] ?></td>
                <td><?= $review['date'] ?></td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>