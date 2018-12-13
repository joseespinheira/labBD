<html>
<head>
<title></title>
<script languague="javascript">
setTimeout( 'fechar(); ',1000); //fecha a janela em 5 segundos
function fechar(){
    if(document.all){
        window.opener = window
        window.close('#')
    }else{
        self.close();
    }
}
function popup(){
    window.open("aluno.php", "_blank");
    window.open("aluno_turma.php", "_blank");
    window.open("curso.php", "_blank");
    window.open("disciplina.php", "_blank");
    window.open("escola.php", "_blank");
    window.open("pessoa.php", "_blank");
    window.open("professor.php", "_blank");
    window.open("projeto.php", "_blank");
    window.open("prova.php", "_blank");
    window.open("turma.php", "_blank");
}
</script>
</head>
<body onload=popup()>
    Registros inseridos.
    <script language='javascript'>
            setTimeout( 'fechar(); ',6000); //fecha a janela em 5 segundos
            function fechar(){
            if(document.all){
            window.opener = window
            window.close('#')
            }else{
            self.close();
            }
            }
            </script>
</body>
</html>