<?php
          require_once ("../login_bdd.php");

          $nom=$_REQUEST['nom'];
          $sport=$_REQUEST['sport'];
          $nb_participant=$_REQUEST['nb_participant'];
          $jour=$_REQUEST['jour'];
          $heure=$_REQUEST['heure'];

          $c = new mysqli("127.0.0.1","administrateur","123","base_de_vitesse");

          $sql="INSERT INTO competition(sport,nom,nb_participant,jour,heure) VALUES ('$sport' , '$nom', '$nb_participant', '$jour', '$heure');";

          //echo "<script>  console.log('" . $sql . "');</script>";
          if(!$c->query($sql))
          {

            printf("Message d'erreur : %s\n", $c->error);
            echo "<script>  console.log(\"Message d_erreur : " . $c->error . "\");</script>";
          }


          mysqli_close($c);

          header("location:../competvalide.php")

?>