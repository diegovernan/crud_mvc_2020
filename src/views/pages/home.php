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
                        <button class="btn btn-sm btn-warning">Editar</button>
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php $render('footer'); ?>