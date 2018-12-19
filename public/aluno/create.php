<head>
    <title>Criar aluno</title>
</head>
<!-- importando o cabeçario geral -->
<?php 
    include "../layout/header.html";
    require '../bd/conexao.php';
    $dados = mysqli_query($mysqllink,"SELECT * FROM alunos GROUP BY matricula_aluno");
    $linha = mysqli_fetch_assoc($dados);
    $total = mysqli_num_rows($dados);
?>

                <div class="card">

                    <div class="card-header">Create New Pessoa</div>
                    <div class="card-body">
                        <a href="index.php " title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                    <?    if ( $errors->any() )     ?>
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/pessoa') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <?= include ('form.php'); ?>

                        </form>

                    </div>
                </div>
