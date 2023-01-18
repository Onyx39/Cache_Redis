<!DOCTYPE HTML>

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
        <br><br>Bienvenue sur la page de connection d'<i>EtuServices</i><br><br>

        Connectez vous en rentrant les informations suivantes : <br>
        <form action="<?php __FILE__ ?>" method="post">
            
            <?php 
                if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
                    $mdp = $_POST['motdepasse'];
                    $email = $_POST['email'];
                    $sql = "SELECT count(id_utilisateur) FROM utilisateur WHERE email = '".$email."' AND motdepasse = '".$mdp."';";
                    $result =  mysqli_query($conn, $sql) or die("Requête invalide : ". mysqli_error($conn)."</br>".$sql);
                    $val = mysqli_fetch_array($result);
                    if ($val[0] == 1) {
            
                    	$sql2 = "SELECT id_utilisateur FROM utilisateur WHERE email = '".$email."' AND motdepasse = '".$mdp."';";
                        $result2 =  mysqli_query($conn, $sql2) or die("Requête invalide : ". mysqli_error($conn)."</br>".$sql2);
                        $val2 = mysqli_fetch_array($result2);
                        $sql3 = "SELECT prenom FROM utilisateur WHERE email = '".$email."' AND motdepasse = '".$mdp."';";
                        $result3 =  mysqli_query($conn, $sql3) or die("Requête invalide : ". mysqli_error($conn)."</br>".$sql3);
                        $val3 = mysqli_fetch_array($result3);
                        $user_firstname = $val3[0];
                        $user_id = $val2[0];

                        // Test pour le retour du script python
			            /*
                        $cmd = "/bin/python3 ../python/script.py ";
                        $command = escapeshellcmd($cmd." ".$user_id);
                        $shelloutput = shell_exec($command);
                        echo "++".$shelloutput."++";
                         
                        $test = exec('python ../python/script.py ' + $user_id);
                        echo $test;
                        
                        $command_exec = escapeshellcmd('../python/script.py' + $user_id);
                        $str_output = shell_exec($command_exec);
                        echo $str_output;
                        
                        
                        $prog = '../python/script.py '.$user_id;
                        $output = shell_exec($prog);
                        
                        exec('python ../python/script.py', $output, $ret_code);
                        echo "sortie : ---".$ret_code."---";
                        */

                        echo "<br>Bienvenue ".$user_firstname." !  ";
                        echo "Suivez <a href='services.php'>ce lien</a> pour accéder à nos services.";
                    }  
                    else {
                        echo "Les informations fournies ne sont pas correctes.<br>Recommencez ou inscrivez vous.";
                    }
                }
                ?>
                <br><br>
                <label><b>Adresse mail</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required><br><br>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="motdepasse" required><br><br>

                <input type="submit" id='submit' value='Valider'>
        </form>  
        </center>


    </body>

</html>