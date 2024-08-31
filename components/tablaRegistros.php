<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro) { ?>
                <tr class="">
                    <td scope="row"><?= $registro["report_id"] ?></td>
                    <td><?= $registro["user_name"] ?></td>
                    <td><?= $registro["user_email"] ?></td>
                    <td class="">
                        <a class="btn btn-warning" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>