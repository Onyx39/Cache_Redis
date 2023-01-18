<html>
    <head>
        <title>
            Connection EtuServices
        </title>

    </head>

    <?php
    require_once("../bd/connexionBD.php");
    $conn = connexionBdd();
    ?>

    <body>
        <center>
        Bienvenue sur la page de connection d'<i>EtuServices</i><br><br>

        Connectez vous en rentrant les informations suivantes : <br>
        <form action="<?php __FILE__ ?>" method="post">
            
            <?php 
                if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
                    $mdp = $_POST['motdepasse'];
                    $email = $_POST['email'];
                    $sql = "SELECT count(id_utilisateur) FROM utilisateur WHERE email = '".$pseudo."' AND motdepasse = '".$mdp."';";
                    $result =  mysqli_query($conn, $sql) or die("Requête invalide : ". mysqli_error($conn)."</br>".$sql);
                    $val = mysqli_fetch_array($result);
                    if ($val[0] == 1) {
                        $user_firstname = $prenom;
                        $user_id = $id_utilisateur;
                        echo "Bienvenue ".$user_fistname." !  ".$user_id;
                    }  
                    else {
                        echo "Les informations fournies ne sont pas correctes.<br>Recommencez ou inscrivez vous.";
                    }
                }
                ?>
                <br><br>
                <label><b>Adresse mail</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="motdepasse" required>

                <a href="inscription.php">Connection</a>

                <input type="submit" id='submit' value='LOGIN'>
        </form>  

        </center>


    </body>

</html>