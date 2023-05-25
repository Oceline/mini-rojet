<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <section class="s4">
            <div class="container-fluid">
                <div class="row row-cols-3 row4">
                    <div class="col-md-4 col-sm-4  col1">
                        <img class="img2" src="images/logo - Copie.png" alt="" height="100px"; width="100px";>
                    </div>
                    <div class="col-md-4 col-sm-4  col2" >
                        <h1>Liste des étudiant</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 col3" >
                        <h3>Burkina-Faso</h3>
                        <p>Unité-Progrès-Justice</p>
                    </div>
                </div>
            </div>
        </section>
    </header> <br> <br>

   <section>
    <table class="table table-striped-columns"> 
        <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Genre</th>
            <th>Date d'inscription</th>
            <th>Personne en cas de besoin</th>
        </tr>

      <?php
             // Vérification de la connexion
                require'connexion.php'; 
                // Récupération des données des étudiants
                $requete = "SELECT nom, prenom, date_naissance, genre,inscription,person_besoin FROM etudiants";
                $data=$conn->query($requete);
                if($data->rowcount()>0){
                    $num= 1;
                    while($row=$data->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                            echo "<td>" .$num. "</td>";
                            echo "<td>" . $row['nom'] . "</td>";
                            echo "<td>" . $row['prenom'] . "</td>";
                            echo "<td>" . $row['date_naissance'] . "</td>";
                            echo "<td>" . $row['genre'] . "</td>";
                            echo "<td>" . $row['inscription'] . "</td>";
                            echo "<td>" . $row['person_besoin'] . "</td>";
                        $num++;
                        echo "</tr>";

                    }
                }else{
                    echo"aucune donnée dans la base";
                }     
?>

</table>
</section>


<footer>
    <P>Tel: +226 25-30-70-64 <br>
       Fax: +226 25-30-72-40
    </P>
    <hr> <br><br><br>
    <a href="https://www.facebook.com/profile.php?id=100064838614968">Ufr/sds de l'Université Ouaga I professeur Joseph Ki-Zerbo</a>
</footer>
</body>
</html>