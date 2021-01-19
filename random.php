<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <title>Exercices PHP</title>

</head>

<body>

<div class="text-center">

<h1 class= "p-3">Projet PHP</h1>
<h3 class="m-3">Random</h3>

<?php

//Récupérer la réponse de l'utilisateur et en faire une variable
if (isset($_POST ["userAnswer"])){
    $userAnswer = $_POST["userAnswer"];
}
//Récupérer la "vraie" réponse et en faire une variable
if (isset($_POST["answer"])){
    $answer = $_POST["answer"];
}

if ($answer == $userAnswer){
    echo "Bonne réponse!";
}else {
    echo "Mauvaise réponse";
}
?>

<a href="index.php" class="btn btn-danger">Retour à l'accueil</a>

</div>








  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>