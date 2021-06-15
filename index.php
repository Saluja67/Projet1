<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>La Cantinella - Indo Italien</title>
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
            
            <section>
                
                <article>
                    
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Un mot de la Cantinella !</h1>
                    
                    <p><em>MÉTRO MARCEL RUDLOFF</em> – À deux pas du Parc des Poteries, sur l’avenue François Mitterrand, La Cantinella est un restaurant bien connu dans ce quartier résidentiel de l’Ouest de Strasbourg. 

                       </br>
                       </br>
                       </br>
                       </br> 

                       <em>ITALO-INDIEN</em> – Plat du jour ou à la carte… c’est vous qui voyez. La liste des pizzas, plats traditionnels français et spécialités indiennes donnent le change. Les prix aussi se montrent raisonnables.

                        </br>
                        </br>
                        </br>
                        </br>

                      <em>ACCUEIL AGRÉABLE</em> – L’équipe jeune et dynamique vous attend dans une bonne humeur communicative. Le cadre confortable rassure. Les habitués ne ratent pas une occasion de s’y retrouver lors des grandes retransmissions. </p>

                    </br>

                      <p> Quelque photo par rapport au restaurant ! </p>

                    </br>
                    </br>
                    </br>

                      <img src="image_1.jpg" width="500" height="600" />
                      <img scr="image_3.jpg" width="500" height="600"/>
                      <img src="image_3.jpg" width="500" height="600"/>  

                </article>
                <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
            </section>
            
            <footer>
                <div id="Nom">
                    
                    <h1><em>La Cantinella</em></h1>
                    
                </div>
                
                <div id="Logo-Facebook">
                    <h1>Suivez-Nous</h1>
                    <p><a href="https://www.facebook.com/lacantinellastrasbourg/"> <img src="images/facebook.png" alt="Facebook" /> </a></p>
               </div>
                 
                 <p><em>Disign by Yassine  - Ange - Hasina </em> </p>  
                
            </footer>
        </div>
    </body> 


</body>
</html>