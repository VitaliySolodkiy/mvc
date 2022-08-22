<h1 class="text-center"><?= $title ?></h1>
<table class="table table-striped table-dark my-table">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Remove</th>
    </tr>
    <?php
    foreach ($users as $index => $user) {
    ?>
        <tr>
            <td><?= $index ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td class="my-table-icons"> <img src="/img/icons/pencil.png" alt=""> </td>
            <td class="my-table-icons"> <img src="/img/icons/remove.png" alt=""> </td>
        </tr>
    <?php
    }
    ?>
</table>