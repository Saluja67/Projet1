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
								<button><a href="page1.html">inscription</a></button>
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
									
								
										$compt=0;
									
									
								 if(isset($_POST['passw']) and isset($_POST['log'] )){
										
										
										
										for($i=0; $i<3; $i++){
											
				
											
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
							
									//~ }
									
									//~ elseif(isset($_POST['pass']) and isset($_POST['login']) and $_POST['login'] =='admin'  and $_POST['pass'] == 'Admin-9874' ){
										
										//~ echo "Bon mot de passe !";
										
									//~ }
									
									
									//~ elseif(isset($_POST['pass']) and isset($_POST['login']) and $_POST['login'] =='visiteur'  and $_POST['pass'] == '12345678' )
									
									//~ {
										//~ echo "Bon mot passe !";
										
									//~ }
							
									//~ else{
																				
										//~ echo "Mauvais mots de passe ou identifiant, veuillez rentrer vos informations";
										
									//~ }
									
							
							
									?>
								

    
    </body>
		
	</html>
