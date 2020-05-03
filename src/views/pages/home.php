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

    <table class="table table-sm table-striped table-bordered">
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

<script>
    jQuery(document).ready(function() {
        jQuery('.table').DataTable();
    });

    jQuery('.table').DataTable({
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }
    });
</script>

<?php $render('footer'); ?>