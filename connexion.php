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
                    <li><a href="connexion.php">Connexion</a></li>
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
                                <label for="pseudo">Login:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="text" id="pseudo" name="log" value="" >
                            </td>
                        </tr>
                        <tr>
                            <td style="width:10%;text-align:right;vertical-align:top;">
                                <label for="pass">Pass:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="password" id="pass" name="passw" value="" >                                                           
                            </td>
                        </tr>
     
                            <td>
                            </td>
                            <td>
                                <input type="submit"  value="se connecter!">
                <button><a href="inscription.php">inscription</a></button>
                            </td>
                        </tr>
                    </table>
                </form>  
                
                    <?php

                  $users[0]['login'] = 'user';
                  $users[0]['pass'] = 'User;45852';
                  $users[0]['email'] = 'user@example.fr';
                  $users[1]['login'] = 'admin';
                  $users[1]['pass'] = 'Admin-9874';
                  $users[1]['email'] = 'admin@example.fr';
                  $users[2]['login'] = 'visiteur';
                  $users[2]['pass'] = '12345678';
                  $users[2]['email'] = 'visiteur@example.fr';
                  $users[3]['login'] = 'Ange';
                  $users[3]['pass'] = 'Angedu67';
                  $users[3]['email'] = 'Ange@Claire.fr';  
                  
                
                    $compt=0;
                  
                  
                 if(isset($_POST['passw']) and isset($_POST['log'] )){
                    
                    
                    
                    for($i=0; $i<4; $i++){
                      
        
                      
                      if($_POST['log'] == $users[$i]['login'] and $_POST['passw'] == $users[$i]['pass']){
                        
                        $compt=$compt+1;
                      
                      }
                    }
                      
                      if($compt==1){
                        
                        echo 'les identifiants sont bons';
                        
                      }
                      else{
                        
                        echo 'les identifiants sont mauvais';
                                        
                    }
                  }
              
              
              
              
                  ?>
                

    
    </body>

                </article>
                
            </section>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            <footer>
                <div id="Nom">
                    
                    <h1><em>La Cantinella</em></h1>
                    
                </div>
                
                <div id="Logo-Facebook">
                    <h1>Suivez-Nous</h1>
                    <p><a href="https://www.facebook.com/lacantinellastrasbourg/"> <img src="images/facebook.png" alt="Facebook" /> </a></p>
               </div>
                 
                 <p><em>Disign by Yassine - Ange - Hasina </em> </p>  
                
            
            </footer>
        </div>
    </body> 


</body>
</html>