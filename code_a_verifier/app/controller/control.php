<?php
    require('../../config/Database.php');


try 
{
    $connexion = DataBase::connexionBase(); //type statique

    //*     requete SQL a modifier selon BDD     *\\
    $query="SELECT mdp_utilisateur FROM  utilisateur WHERE email_utilisateur ='".$_POST['email']."'";
    $resultat= $connexion->prepare($query);
    $resultat->execute();

    foreach($resultat as $valeur) 
    {
        $mdpSecret= $valeur['mdp_utilisateur'];
    };

    
    
    if(password_verify($_POST['mdp'], $mdpSecret))
    {
        header('location: '); //*    vers page profil utilisateur     *\\
    }else{
        ?>
        <script>alert('');</script>   //*     créé un sweetAlert pour avertif pourquoi l'utilisateur a etait rediriger     *\\
        <?php
        header('location: ');//*     vers page inscription            *\\
        
    }
    
    $connexion = null;
}

catch (PDOException $erreur) 
{

    echo $erreur->getMessage();
    die();
}




