<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">название</th>
            <th scope="col">описание</th>
            <th scope="col">цена</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($goods as $good) : ?>
            <tr>
                <th scope="row"><?= $good['id_good'] ?></th>
                <td><?= $good['good_name'] ?></td>
                <td><?= $good['good_description'] ?></td>
                <td><?= $good['good_price'] ?> руб </td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>