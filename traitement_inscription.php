<!DOCTYPE html>
<html>
<head>
    <title>Traitement Inscription</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomComplet = $_POST["nom_complet"];
    $adresseEmail = $_POST["adresse_email"];
    $motDePasse = $_POST["mot_de_passe"];
    $confirmerMotDePasse = $_POST["confirmer_mot_de_passe"];
    
    $champsVides = array();
    if (empty($nomComplet)) {
        $champsVides[] = "Nom complet";
    }
    if (empty($adresseEmail)) {
        $champsVides[] = "Adresse e-mail";
    }
    if (empty($motDePasse)) {
        $champsVides[] = "Mot de passe";
    }
    if (empty($confirmerMotDePasse)) {
        $champsVides[] = "Confirmation du mot de passe";
    }
    
    if (!empty($champsVides)) {
        echo "Les champs suivants sont obligatoires : " . implode(", ", $champsVides);
    } elseif ($motDePasse !== $confirmerMotDePasse) {
        echo "Les mots de passe ne correspondent pas.";
    } else {
        echo "Inscription réussie pour $nomComplet.";
        echo "nom : $nom<br>";
        echo "Adresse e-mail: $email <br>";
    }
}
?>
<br> <a href="formulaire_inscription.html">retour idiot</a>
</body>
</html>
