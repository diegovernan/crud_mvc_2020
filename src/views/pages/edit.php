<?php $render('header'); ?>

<div class="container">
    <h1 class="text-center">Editar</h1>

    <?php if (!empty($_SESSION['info'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <?= $_SESSION['info']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php $_SESSION['info'] = ''; ?>
    <?php endif; ?>

    <form method="post" action="<?= $base ?>/update/<?= $user['id'] ?>">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
        </div>

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
        </div>

        <div>
            <a href="<?= $base ?>" class="btn btn-sm btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php $render('footer'); ?>