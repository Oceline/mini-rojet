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
        <section class="s1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="images/logo.png" alt="" height="100px"; width="100px";>
                    </div>
                    <div class="col-md-8 col-sm-8" >
                        <h1 class="h1">Ufr/sds Medecine-Pharmacie-
                            TSS université Pofesseur <br>
                            Joseph Ki-Zerbo
                        </h1>
                    </div>
                </div>
            </div>
    </header>
        </section>
        <section  class="s2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2>Insrcire un nouveau étudiant</h2>
                <form  action="enregistrement.php" method="POST">
                    <h5><label for="">Nom:</label></h5>
                    <input type="text" name="nom">
                    <h5><label for="">Prénom:</label></h5>
                    <input type="text" name="prenom" >
                    <h5><label for="">Date de naissance:</label></h5>
                    <input type="date" name="date_naissance">
                    <h5><label for="">Genre:</label></h5>
                    <select class="" name="genre">
                        <option value="" selected hidden> sélectioner</option>
                        <option value="Féminin">Féminin</option>
                        <option value="Féminin">Masculin</option>
                    </select>
                    <h5><label for="">Date d'inscription:</label></h5>
                    <input type="date" name="inscription">
                    <h5><label for="">I.C:</label></h5>
                    <input type="text" name="urgence_person"><br><br><br>
                    <input class="input1" type="submit" name="envoyer">
               </form>
           </div>
       </div>
    </div>
</section> <br><br>
<section>
  <button><a href="affichage.php"><p class="acceder">Accéder à la liste</p></a></button> 
</section> <br><br>

    <footer>
        <div class="container-fluid"></div>
        <P>Tel: +226 25-30-70-64 <br>
           Fax: +226 25-30-72-40
        </P>
        <hr> <br><br><br>
        <a href="https://www.facebook.com/profile.php?id=100064838614968">Ufr/sds de l'Université Ouaga I professeur Joseph Ki-Zerbo</a>
    </footer>



    <script src="Styl/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>