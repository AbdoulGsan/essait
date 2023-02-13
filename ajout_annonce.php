<?php
    include("header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajout_annonce.php" method="POST">
    <div class="container col-sm-12 col-md-8 col-xl-10 bg-success rounded" style="margin-top: 70px;margin-bottom:10px; height:500px;">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="Titre"><strong>Titre</strong></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre" name="titre">
        </div>
        <div class="">
            <label for="exampleFormControlInput1" class="Titre"><strong>Image</strong></label>
        <input type="file" value="" class="form-control" id="" placeholder="Image de l'annonce" name="photo" required>
        </div>
        <p><strong>Categorie</strong></p>
        <div class=" " style="margin-top:-15px ;">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="local" id="flexCheckDefault" name="categorie">
                <label class="form-check-label" for="flexCheckDefault">
                    Local
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="international" id="flexCheckChecked" name="categorie">
                <label class="form-check-label" for="flexCheckChecked">
                    international
                </label>
                </div>
        </div>
        <div class="form-group mb-3 text-truncate">
            <label for="exampleFormControlTextarea1" class=""><strong>Contenue</strong></label>
        <input type="text" class="form-control" name="contenue" id="exampleFormControlTextarea1" rows="3" style="height: 200px;" >
        </div>
        <div class="">
            <input type="submit" name="submit">
        </div>
    </div>
    </form>
    
    <?php
    /*include("conn_bdd.php");
    session_start();
	if(isset($_POST['submit']))
	{
		$titre=htmlentities(trim($_POST['titre']));
        $categorie=htmlentities(trim($_POST['categorie']));
        $contenue=htmlentities(trim($_POST['contenue']));
        extract($_POST);
        
        $photo = $_FILES['photo']['name'];
        $nomtemporairePhoto = $_FILES['photo']['tmp_name'];
            
            if(move_uploaded_file($nomtemporairePhoto,"images/$photo"))
            {
                try{
                    $bdd = new PDO('mysql:host=localhost;charset=utf8; dbname=globalinfoguinee', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
                {         
                    die('Erreur : '.$e->getMessage());
                }
                    $req = $bdd->prepare("INSERT INTO annoce (titre,images,categorie,contenue) VALUES('$titre','$photo','$categorie','$contenue')");
                    $resultat=$req->execute();
                    $req->closeCursor();
                }
                else{
                    echo 'Echec de l\'upload !';
                }
        }else echo "entrer toutes les information";
    session_destroy();*/
?>
</body>
</html>