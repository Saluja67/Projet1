<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>connexion</title>
        <meta charset="utf-8">
        <meta name="description" content="">
    </head>
    <body>
		<h1>PROJET Yassine Hasina Ange</h1>
		<h2>Formulaire</h2>
		        <br>
        <div class="flex-container" style="height: 400px;">
			<div class="item-center" style="width: 30%;">
                <form method="post" action="">
                   
                   
                   
                    <table style="border: 1px solid black;">
                        <tr>
                            <td style="width:10%; text-align:right;vertical-align:top;">
                                <label for="pseudo">Login:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="text" id="pseudo" name="login" value="" >
                            </td>
                        </tr>
                        <tr>
                            <td style="width:10%;text-align:right;vertical-align:top;">
                                <label for="pass">Pass:</label>
                            </td>
                            <td style="width:10%;">
                                <input type="password" id="pass" name="pass" value="" >                                                           
                            </td>
                        </tr>
     
                            <td>
                            </td>
                            <td>
                                <input type="submit"  value="se connecter!">
								<button><a href="page1.html">inscription</a></button>
                            </td>
                        </tr>
                    </table>
                </form>  
                
                		<?php
									if(isset($_POST['pass']) and isset($_POST['login'] )
									
									{
											for(
									}
									
									elseif(isset($_POST['pass']) and isset($_POST['login']) and $_POST['login'] =='admin'  and $_POST['pass'] == 'Admin-9874' ){
										
										echo "Bon mot de passe !";
										
									}
									
									
									elseif(isset($_POST['pass']) and isset($_POST['login']) and $_POST['login'] =='visiteur'  and $_POST['pass'] == '12345678' )
									
									{
										echo "Bon mot passe !";
										
									}
							
									else{
																				
										echo "Mauvais mots de passe ou identifiant, veuillez rentrer vos informations";
										
									}
									
								

											$users[0]['login'] = 'user';
											$users[0]['pass'] = 'User;45852';
											$users[0]['email'] = 'user@example.fr';
											$users[1]['login'] = 'admin';
											$users[1]['pass'] = 'Admin-9874';
											$users[1]['email'] = 'admin@example.fr';
											$users[2]['login'] = 'visiteur';
											$users[2]['pass'] = '12345678';
											$users[2]['email'] = 'visiteur@example.fr';
							
									?>
								

    
    </body>
		
	</html>
