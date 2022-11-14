<?php
//On initialise la session PHP avec session_start() ;
session_start();

//Avec require_once nous vérifions si la page connexion_bdd.php a déjà été incluse et si c’est le cas il ne l’inclut pas une nouvelle fois.
	require_once 'connexion_bdd.php';
	
	/*Ensuite avec une condition ISSET on vérifie si une variable est déclarée, que tout les champs requis sont remplis , 
	/*suivie d’un bloc d’exceptions que l’on peut voir à travers TRY qui va entourer le code pour faciliter la saisie d’une exception potentielle
	/* et d’un bloc CATCH qui définit comment réagir si un ou plusieurs types d’exceptions ou erreurs a été lancée.*/
	if(isset($_POST['connecter'])){
		if($_POST['email'] != "" || $_POST['mdp'] != ""){
			$email = $_POST['email'];
			$mdp = $_POST['mdp'];
			$requete = "SELECT * FROM `utilisateurs` WHERE `email`=? AND `mdp`=? ";
			$query = $connexion->prepare($requete);
			$query->execute(array($email,hash('sha256', $mdp)));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['id'];
				$_SESSION['pseudo'] = $fetch['pseudo'];
				header("location: index.php");
			} else{
				echo "
				<script>alert('mail ou mot de passe invalide');</script>
				<script>window.location = 'test_connexion2.php';</script>
				";
			}
		}else{
			echo "
				<script>alert('Complétez le fichier d'inscription!');</script>
				<script>window.location = 'formulaire_inscription.php';</script>
			";
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['pseudo']; ?>!</h1>
        <p>C'est votre espace utilisateur.</p>
        <a href="deconnexion.php">Déconnexion</a>
    </div>
</body>

</html>