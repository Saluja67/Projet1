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
            		<li><a href="index.html">Accueil</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="inscription.php">inscription</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="connexion.html">Connexion</a></li>
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
                    
                    <div class="flex-container" style="height: 400px;">
            <div class="item-center" style="width: 30%;">
                <form method="post" action="">
                    <table style="border: 1px solid black;">
                        <tr>
                            <td style="width:10%; text-align:right;vertical-align:top;">
                                <label for="pseudo">username:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="text" id="" name="login" value="" required>
                            </td>
                        </tr>
                        <tr>
                
                            <td style="width:10%;text-align:right;vertical-align:top;">
                                <label for="pass">mots de passe:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="password" id="pass" name="pass" value="" required>                                                           
                            </td>
                        </tr>
                        <tr>
                            <td style="width:10%;text-align:right;vertical-align:top;">
                                <label for="cfpass">Confirmation du mot de passe :</label>
                            </td>
               
                            <td style="width:10%;">
                                <input type="password" id="cfpass" name="cfpass" value="" required>                                                           
                            </td>
                       </tr>
                       <tr>  
                             <td style="width:10%;text-align:right;vertical-align:top;">
                                <label for="email">E-mail:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="mail" id="cfpass" name="cfpass" value="" required>                                                           
                            </td>
                        </tr>  
                                  <tr>
                            <td style="width:10%;text-align:right;vertical-align:top;" required>
                                <label>Sexe :</label>
                            </td>
                            <td style="width:10%;">
                                
                                <input type="radio" id="femme" name="sexe" value="femme"required>
                                <label for="sexe">Femme</label><br>
                                
                                
                                <input type="radio" id="homme" name="sexe" value="homme"required>
                                <label for="sexe">Homme </label><br>

                            </td>
                        </tr>    
                            
                            
                        </tr>
     
                            <td>
                            </td>
                            <td>
                                <input type="submit"  value="s'inscrire!">
                            </td>
                        </tr>
                    </table>
                </form> 
                
                <?php
                    if(isset($_POST['pass']) AND isset($_POST['cfpass']) AND $_POST['pass'] != $_POST['cfpass'])
                    {
                        echo "Les mots de passe ne se correspondent pas";
                        
                    }
                    else
                    {
                        echo"bonne inscription";
                        
                    }
                
                
                ?>
                </article>
                
            </section>
            
            <footer>
                <div id="Nom">
                    
                    <h1><em>La Cantinella</em></h1>
                    
                </div>
                
                <div id="Logo-Facebook">
                    <h1>Suivez-Nous</h1>
                    <p><a href="https://www.facebook.com/lacantinellastrasbourg/"> <img src="images/facebook.png" alt="Facebook" /> </a></p>
               </div>
                 
                 <p><em>Disign by yassine driouach</em> </p>  
                
            </footer>
        </div>
    </body> 


</body>
</html>