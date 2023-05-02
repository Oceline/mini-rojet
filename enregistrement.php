<?php
     $nom=$_POST['lastname'];
     $prenom=$_POST['firstname'];
     $birthday=$_POST['birthday'];

     require'connexion.php';
    
     $requete="INSERT INTO `inscrition`(nom,prénom,date_de_naissance) VALUES('$nom', '$prenom','$birthday')";
     $query=mysqli_query($conn, $requete);
     if(isset($query)){
        echo "Insertion réussie";
     }
     else{
        echo "Error d'insertion";
     }
     if($nom&&$prenom&&$birthday){
       echo "veuillez inserer tous les champs"
     }
    ?>
