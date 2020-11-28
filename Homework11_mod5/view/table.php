<h1 class="text-danger bg-dark" style="width: 100%; margin: 0; padding: 10px">
    TOP-500 popular domains
</h1>


<table class="table">
    <thead class="thead-light">
        <tr>
            <?php foreach (self::$headers as $head) : ?>
                <th scope="col"><?= $head ?></th>
            <?php endforeach ?>

        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; self::$numout > $i; $i++) : ?>
            <tr>
                <th scope="row"><?= $i + 1 ?></th>
                <td scope="col"><?= self::$data[$i]['domain'] ?></td>
                <td scope="col"><?= self::$data[$i]['ip'] ?></td>
                <td scope="col"><?= self::$data[$i]['rank'] ?> </td>
                <td scope="col"><?= self::$data[$i]['status'] ?> </td>
                <td scope="col"><?= self::$data[$i]['checked'] ?> </td>

            </tr>
        <?php endfor ?>
    </tbody>
</table>