<?php $render('header'); ?>

<div class="container">
    <h1 class="text-center">CRUD</h1>

    <a href="<?= $base ?>/create" class="btn btn-sm btn-primary mb-2">Adicionar</a>

    <table class="table table-sm table-striped" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td>
                        <a href="<?= $base ?>/edit/<?= $user['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="<?= $base ?>/delete/<?= $user['id'] ?>" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php $render('footer'); ?>