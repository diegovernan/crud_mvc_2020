<?php $render('header'); ?>

<div class="container">
    <h1 class="text-center">Criar</h1>

    <?php if (!empty($_SESSION['info'])) : ?>
        <script type="text/javascript">
            swal({
                html: jQuery(".alert").html(),
                type: 'error',
                title: 'Erro!',
                text: '<?= $_SESSION['info']; ?>',
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>

        <?php $_SESSION['info'] = ''; ?>
    <?php endif; ?>

    <form method="post" action="<?= $base ?>/store">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div>
            <a href="<?= $base ?>" class="btn btn-sm btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php $render('footer'); ?>