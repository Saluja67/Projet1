

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Inscription</title>

</head>

<body>
			
		<h1>PROJET Yassine Hasina Ange</h1>
		<h2>Inscription</h2>
        <br>
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
                
	
</body>

</html>
