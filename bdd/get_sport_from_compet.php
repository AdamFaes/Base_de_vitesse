<?php

    require_once("../login_bdd.php");

    $id_compet=$_REQUEST["id"];
    $query="SELECT sport FROM competition WHERE id=$id_compet;";
    $result=$con -> query($query);
    $option='';
    if(!$result)
                  {
                    echo "Aucune compétition n'a été crée";
                  }

                else if ($result->num_rows>0)
                  {
                    while ($row = $result -> fetch_assoc())
                    {
                      $option.= '<option value= "'.$row['sport'].'">'.$row['sport'].'</option>';
                    }
                  } 
    echo $option;

?>