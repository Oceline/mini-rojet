<?php

     require'connexion.php';
     if(isset($_POST['envoyer'])){
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $date_naissance=$_POST['date_naissance'];
     $genre=$_POST['genre'];
     $inscription=$_POST['inscription'];
     $person_besoin=$_POST['urgence_person'];
     $sql= "INSERT INTO etudiants(nom,prenom,date_naissance,genre,inscription,person_besoin) VALUES (:nom,:prenom,:date_naissance,:genre,:inscription,:person_besoin)";
     $requete=$conn->prepare($sql);
     $requete->bindParam(':nom',$nom);
     $requete->bindParam(':prenom',$prenom);
     $requete->bindParam(':date_naissance',$date_naissance);
     $requete->bindParam(':genre',$genre);
     $requete->bindParam(':inscription',$inscription);
     $requete->bindParam(':person_besoin',$person_besoin);
     try {
      $requete->execute();
      echo "Congratulations successful registration";
   }
     catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
     }
}
     ?>

