<?php 
    session_start();
    // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Espace Membre</title>
</head>
<body>
     <div id="bloc_page">
          <header>
          	<div id="titre_principal">
            <h1>La Cantinella</h1>
          		 </div>     
            <h2>Restaurant Indo Italien</h2>
            </div>
          
            <nav>
            	<ul>
            		<li><a href="index.php">Accueil</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="contact.php">Contact</a></li>
            	</ul>

            </nav>
            </header>   
             
            <div id="banniere_image">
                <div id="banniere_description">
                    La Cantinella accueillant et très chaleureux !
                </div>
            </div>
            
          
                </article>
  
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


                <div class="text-center">
                        <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>
                        <hr />
                        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                      
                </div>
            </div>
        </div>    
                                
  </body>
</html>