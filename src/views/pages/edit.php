<?php $render('header'); ?>

<div class="container">
    <h1 class="text-center">Editar</h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
        </div>

        <div>
            <a href="<?= $base ?>" class="btn btn-sm btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-sm btn-primary">Editar</button>
        </div>
    </form>
</div>

<?php $render('footer'); ?>