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
    
<h1 class= "text-center p-3 ">Projet PHP</h1>



<div class="container text-center p-5">

    <h3 class="m-3">Afficher la table de 3</h3>

    <a href="table3.php" class="btn btn-outline-dark">Afficher</a>

</div>


<div class="container">

    <h3 class="text-center p-5 m-3">Sélectionner un Multiple</h3>


    <form  method="post" action="multiple.php">
        <div class="form-group text-center">
            <label for="multiple">Sélectionnez un multiple</label>
            <select class="form-control" id="multiple" name="multiple">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <button type="submit" class="btn btn-outline-dark">Valider</button>
        </div>

        
    </form>
</div>

<div class="container text-center">

<h3 class="text-center p-5 m-3">Afficher avec des boutons radio</h3>
<p class="text-center">Choix du multiple</p>

<form method="post" action="checkbox.php">
  <div>
        <label class="form-check-label" for="inlineCheckbox1">1</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox1" value="1">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox2">2</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox2" value="2">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox3">3</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox3" value="3">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox4">4</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox4" value="4">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox5">5</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox5" value="5">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox6">6</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox6" value="6">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox7">7</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox7" value="7">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox8">8</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox8" value="8">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox9">9</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox9" value="9">
  </div>
  <div>
        <label class="form-check-label" for="inlineCheckbox10">10</label>
        <input type="checkbox" class="form-check-input" name="inlineCheckbox[]" id="inlineCheckbox10" value="10">
  </div>

  <button type="submit" class="btn btn-outline-dark">Voir les résultats</button>
</form>

</div>

<div>
    <h3 class="text-center p-5 m-3">Multiplication aléatoire</h3>
    <form  method="post" action="random.php">
        <div class="form-group text-center">
        
            <div class="form-group text-center">
                <label for="answer">Multiplication aléatoire:</label>

                <?php
                    $nombre1 = [1,2,3,4,5,6,7,8,9,10];
                    $nombre2 =[1,2,3,4,5,6,7,8,9,10];
                    $nombreRandom1 = array_rand($nombre1); 
                    $nombreRandom2 = array_rand($nombre2); 
                    $answer = $nombreRandom1 * $nombreRandom2;

                    echo "$nombreRandom1  x  $nombreRandom2  = ?";


                ?>
                <input type="hidden" class="form-control" name="answer" value= "<?= $answer ?>">
            </div>

            <div class="form-group p-3 m-5">
                <label for="userAnswer">Votre réponse:</label>
                <input type="text" class="form-control" name="userAnswer" id="userAnswer"/>
            </div>

            <button type="submit" name="btn-result" class="btn btn-outline-dark">Valider</button>

        


        </div>
    </form>
</div>











    




    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>