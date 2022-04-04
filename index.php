<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php'; 

# Conteúdo da página
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'home';
}

if($page == 'cursos'){
    include 'views/cursos.php';
}elseif($page == 'alunos'){
    include 'views/alunos.php';
}elseif($page == 'matriculas'){
    include 'views/matriculas.php';
}elseif($page == 'inserir_curso'){
    include 'views/inserir_curso.php';
}elseif($page == 'inserir_aluno'){
    include 'views/inserir_aluno.php';
}elseif($page == 'inserir_matricula'){
    include 'views/inserir_matricula.php';
}else{
    include 'views/home.php';
}


# Rodapé
include 'footer.php';
