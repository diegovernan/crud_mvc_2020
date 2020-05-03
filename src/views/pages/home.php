<?php $render('header'); ?>

<div class="container">
    <h1 class="text-center">CRUD</h1>

    <a href="<?= $base ?>/create" class="btn btn-sm btn-primary mb-2">Criar</a>

    <?php if (!empty($_SESSION['info'])) : ?>
        <script type="text/javascript">
            swal({
                html: jQuery(".alert").html(),
                type: 'success',
                title: 'Sucesso!',
                text: '<?= $_SESSION['info']; ?>',
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>

        <?php $_SESSION['info'] = ''; ?>
    <?php endif; ?>

    <table class="table table-sm table-striped" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($users) : ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td>
                            <a href="<?= $base ?>/edit/<?= $user['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="<?= $base ?>/delete/<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4" class="text-center">Não há usuários cadastrados</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $render('footer'); ?>