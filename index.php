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
}else{
    include 'views/home.php';
}


# Rodapé
include 'footer.php';
