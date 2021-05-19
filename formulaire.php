<?php

// récupération des données
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message1 = $_POST['message1'];
    
    //connexion à la base de données
    include ("include/sql_connect.php");

    //connexion et récupération données de la bdd
    try{
        //connexion bdd
        $bdd = new PDO("mysql:host=$mysql_serveur;dbname=$mysql_bdd", $mysql_pseudo, $mysql_pass);
        // new instanciation de l'objet (création d'un objet de type PDO)

        //requete prepare sql
        $prepare= $bdd->prepare('INSERT INTO formation (nom, prenom, email, message1)
        values(:nom, :prenom, :email, :message1)');
        $prepare->bindParam(':nom',$prenom);
        $prepare->bindParam(':prenom',$nom);
        $prepare->bindParam(':email',$email);
        $prepare->bindParam(':message1',$message1);
        $prepare->execute();

        $bdd = null; // fermeture connexion

        echo "connexion reussie";

        //header('location:contenu.html');
}
    catch(PDOException $e)
{
    //traitement des erreurs
    print "Erreur !: ".$e->getMessage()."<br/>";
    die(); //termine la tache)
}

    ?>