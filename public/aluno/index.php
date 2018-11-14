
<head>
    <title>Criar aluno</title>
</head>

<!-- importando o cabeçario geral -->
<?php include "../layout/header.html"; ?>


<?php  
       require '../bd/conexao.php';
	   $dados = mysqli_query($mysqllink,"SELECT * FROM alunos GROUP BY matricula_aluno");
       $linha = mysqli_fetch_assoc($dados);
       $total = mysqli_num_rows($dados);
?>

                <div class="card">
                    <div class="card-header">Pessoa</div>
                    <div class="card-body">
                        <a href="/aluno/create.php" class="btn btn-success btn-sm" title="Add New Pessoa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
        
                        <!--form method="GET" action="{{ url('/pessoa') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form-->
        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mat. Aluno</th><th>ID Curso</th><th>Mat. Pessoa</th><th>Criado em</th><th>Del?</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($total){do {
                                    ?>
                                        <tr>
                                            <td><?php echo $linha['matricula_aluno']   ?> </td>
                                            <td><?php echo $linha['id_curso']  ?> </td>
                                            <td><?php echo $linha['matricula_pessoa']  ?> </td>
                                            <td><?php echo $linha['created_at']  ?> </td>
                                            <td><?php echo $linha['deleted_at']  ?> </td>
                                            <td>
                                                <a href="<?php echo "../bd/aluno/show.php?id=" . $linha['matricula_aluno'] ?>" class="btn btn-info btn-sm">  Visualizar <a/>
                                                <a href="<?php echo "../bd/aluno/edit.php?id=" . $linha['matricula_aluno'] ?>" class="btn btn-primary btn-sm">  Editar <a/>
                                                <a href="<?php echo "../bd/aluno/excluir.php?id=" . $linha['matricula_aluno'] ?>" class="btn btn-danger btn-sm">  Excluir <a/>
                                            </td>
                                        </tr>
                                    <?php
                                    } while ($linha = mysqli_fetch_assoc($dados));
                                    mysqli_free_result($dados);}
                                    mysqli_close($mysqllink);
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
