
<head>
    <title>Pessoa</title>
</head>

<!-- importando o cabeçario geral -->
<?php include "../layout/header.html"; ?>

<?php  
        require '../bd/conexao_psql.php';

        $dados = pg_query($mysqllink,"select * from pessoa");
	    $linha = pg_fetch_assoc($dados);
        $total = pg_num_rows($dados);
?>
                <div class="card">
                    <div class="card-header">Pessoa</div>
                    <div class="card-body">
                        <a href="/pessoa/create.php" class="btn btn-success btn-sm" title="Add New Pessoa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mat. Pessoa</th><th>Nome</th><th>Sexo</th><th>User</th><th>Senha</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($total){do {
                                    ?>
                                        <tr>
                                            <td><?php echo $linha['matricula_pessoa']   ?> </td>
                                            <td><?php echo $linha['nome']  ?> </td>
                                            <td><?php echo $linha['sexo']  ?> </td>
                                            <td><?php echo $linha['user']  ?> </td>
                                            <td><?php echo $linha['senha']  ?> </td>
                                            <td>
                                                <a href="<?php echo "../bd/pessoa/show.php?id=" . $linha['matricula_pessoa'] ?>" class="btn btn-info btn-sm">  Visualizar <a/>
                                                <a href="<?php echo "../bd/pessoa/edit.php?id=" . $linha['matricula_pessoa'] ?>" class="btn btn-primary btn-sm">  Editar <a/>
                                                <a href="<?php echo "../bd/pessoa/excluir.php?id=" . $linha['matricula_pessoa'] ?>" class="btn btn-danger btn-sm">  Excluir <a/>
                                            </td>
                                        </tr>
                                    <?php
                                    } while ($linha = pg_fetch_assoc($dados));
                                    pg_free_result($dados);}
                                    pg_close($mysqllink);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require "../layout/footer.html"; ?>
