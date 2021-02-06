<?php

$message = "Installation";
$db = 0;

if(isset($_REQUEST["install"]) && $_REQUEST["install"] == "oui"){

    // Paramètres de connection à la database
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "okami";

    // Paramètres de connection
    $server = $db_server;
    $username = $db_username;
    $password = $db_password;
    $database = $db_name;

    // Paramètres du serveur
    $link = new mysqli($server, $username, $password);

    // Vérification de la connection
    if($link->connect_error){

        die("Échec de la connection : " . $link->connect_error);

    }

    // Vérification de l'existance de la database 'okami'
    if(!mysqli_select_db($link,"okami")){

        // Création de la database 'okami'
        $sql = "CREATE DATABASE IF NOT EXISTS `okami` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";

        $recordset = $link->query($sql);

        if(!$recordset){

            die("Erreur: " . $link->error);

        }

        // Selection de la database 'okami'
         mysqli_select_db($link,"okami");

        // Création de la table 'eleves'
        $sql = ("CREATE TABLE `eleves` (
          `id` int(11) NOT NULL,
          `nom` varchar(255) NOT NULL,
          `numero` varchar(255) NOT NULL,
          `classe` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

        $recordset = $link->query($sql);

        if(!$recordset){

            die("Erreur: " . $link->error);

        }

        // contenu par defaut de la table 'eleve'
        // $sql = "INSERT INTO `eleves` (`id`, `nom`, `numero`, `classe`) VALUES
        // (1, 'okami', '57244931', 'cp2');";

        // $recordset = $link->query($sql);

        // if(!$recordset){

        //     die("Erreur: " . $link->error);

        // }


        //Index pour la table `eleve`

        $sql ="ALTER TABLE `eleves` ADD PRIMARY KEY (`id`);";

        $recordset = $link->query($sql);

        if(!$recordset){

            die("Erreur: " . $link->error);

        }

        //AUTO_INCREMENT pour la table `elesves`

        $sql = "ALTER TABLE `eleves` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";

        $recordset = $link->query($sql);

        if(!$recordset){

            die("Erreur: " . $link->error);

        }

        $message = "okami a bien été installé avec succes !";

        ?>

        <script type="text/javascript">
            Swal.fire({
                type: 'success',
                title: 'Installation',
                text: '<?= $message ?>',
                showConfirmButton: false,
                timer: 5000
            )
        </script>

        <?php

        header("location: ../okami_eleve.php");

    }else {

        $message = "La base de données `okami` existe déjà...";

        ?>

        <script type="text/javascript">
            Swal.fire({
                type: 'success',
                title: 'Installation',
                text: '<?= $message ?>',
                showConfirmButton: false,
                timer: 5000
            )
        </script>

        <?php

        header("location: ../okami_eleve.php");

    }

    $db = 1;

    $link->close();

}

?>
<!-- <!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="utf-8" />

    <title>okami_bd</title>

</head>

<body>

<div class="login-page" id="wrapper">

  <div class="form" id="content">

    <form id="install" action="install_okami.php?install=oui" method="POST">


      <center><button class="submit"><h1><?php echo $message?></h1></button></center>


      </form>

      <form action="index.php" method="post" >

       <button class="submit" id="connection"><h1>Se connecter</h1></button>

    </form>


    </div>

</div>

</body>

</html>
 -->
