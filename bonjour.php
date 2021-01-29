<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>L'aventure commence ici</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <p>
          <?php 
             if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) {

                 $nbrepetitions = (int) $_GET['repeter'];
                 if ($nbrepetitions < 100) {
                     for ($repetition = 0; $repetition < $nbrepetitions ; $repetition++) { 
                         echo '<p>Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>';
                     }
                 }
             } else {
                echo 'Pas de nom ou de prénom défini !' ;
            }
             
          ?>
        </p>

    </body>
</html>