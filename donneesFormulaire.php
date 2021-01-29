<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Réception des données formulaire</title>
    </head>
    <body>
        <h1>Ma page web, réception des données formulaire</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <p> Ton prénom est 
            <?php echo $_POST['nom'] . ' ' . $_POST['prenom'] .' !' ; ?> 
        </p>
    </body>
</html>