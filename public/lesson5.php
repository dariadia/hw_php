<table class="table table-striped">

    <thead>
    <tr>
        <th scope="col">Название</th>
        <th scope="col">Картинка</th>
        <th scope="col">Просмотры</th>
        <th scope="col">Размер</th>
    </tr>
    </thead>

    <tbody>
		<?php foreach ($pictures as $picture): ?>
        <tr>
            <th scope="row"><?= $picture['name'] ?></th>
            <td>
                
                <a href="public/single_image_page.php?opened_img=<?= $picture['src']?> " target="_blank"><img src="<?= 'public'.DIRECTORY_SEPARATOR. $picture['src']?>" class="img-thumbnail" alt="" width="70"/></a>
                
            </td>
            <td><?= $picture['views'] ?></td>
            <td><?= $picture['size'] ?> Кб</td>

        </tr>
		<?php endforeach ?>
    </tbody>
</table>

