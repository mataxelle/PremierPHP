<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <a href="bonjour.php?nom=Dupon&amp;prenom=Nana">L'aventure continue par içi !</a>

        <form method="POST" action="donneesFormulaire.php">
            <p>
                <label for="nom">Nom :
                    <input type="text" name="nom" id="nom" />
                </label>
            </p>
            <p>
                <label for="prenom"> Prénom :
                    <input type="text" name="prenom" id="prenom" />
                </label>
            </p>
            <input type="submit" valeur="Valider" />
        </form>
    </body>
</html>