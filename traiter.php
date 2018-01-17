<html>
    <head>
        <meta charset="UTF-8">
        <title>Résultats</title>
        <style>
            #retourner{
                width: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="retourner"><a href="index.php">Faire une nouvelle requête</a> </div>    
        <br>
        <?php
        $nomFichier = "programmeurs.txt";
        $fichier = fopen($nomFichier, "r");

        if ($fichier == false) {
            echo ( "Error in opening file" );
            exit();
        }

        $noms = array();
        $nomCourant = "";
        
        if ($fichier) {
            while (($ligne = fgets($fichier)) !== false) {
                $contenu = explode(";", $ligne);
                for ($i = 0; $i < count($contenu); $i++) {
                    if ($i == 0) {
                        $nomCourant = trim($contenu[$i]);                        
                    }
                    if ($i == 1) {
                    }
                    if ($i == 2) {
                        array_push($noms,$nomCourant);
                    }
                }
            }
            fclose($fichier);
        } else {
            // error opening the file.
        }

        foreach ($noms as $key => $value) {
            echo "$key"." "."$value";
        }
        
        ?>        
    </body>
</html>  