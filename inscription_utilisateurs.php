<?php
//On initialise la session PHP avec session_start() ;
	session_start();
	
	//Avec require_once nous vérifions si la page connexion_bdd.php a déjà été incluse et si c’est le cas il ne l’inclut pas une nouvelle fois.
	require_once 'connexion_bdd.php';
 
	/*Ensuite avec une condition ISSET on vérifie si une variable est déclarée, que tout les champs requis sont remplis , 
	/*suivie d’un bloc d’exceptions que l’on peut voir à travers TRY qui va entourer le code pour faciliter la saisie d’une exception potentielle
	/* et d’un bloc CATCH qui définit comment réagir si un ou plusieurs types d’exceptions ou erreurs a été lancée.*/
	if(ISSET($_POST['inscription'])){
		if($_POST['pseudo'] != "" || $_POST['email'] != "" || $_POST['mdp'] != ""){
			try{
				$pseudo = $_POST['pseudo'];
				$email = $_POST['email'];
				$mdp = $_POST['mdp'];
				$requete = "INSERT INTO utilisateurs (pseudo, email,type, mdp) VALUES ('$pseudo', '$email','user', '".hash('sha256', $mdp)."')";
				$connexion->exec($requete);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"Utilisateur créé avec succès.","alert"=>"info");
			$connexion = null;
			header('location:test_connexion2.php');
		}else{
			echo "
				<script>alert('Veuillez remplir le champ requis !')</script>
			";
		}
	}
?>