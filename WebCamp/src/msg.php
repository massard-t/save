<?php
 include "../includes/connectdb.php";
?>


        <?php 
            	$query = "SELECT titre, Users.ID, Users.firstname, messages.id, messages.msg , messages.email_exp, messages.email_dest 
                FROM messages, Users 
                WHERE email_dest = '". $_SESSION['email'] ."' AND email_exp = Users.mail";
    			/*if(isset($_POST['delete_entry'])) {
        			$delete = "DELETE FROM messages";
        			mysqli_query($dtb, $delete);
        			//echo "test";
        		}*/
            	//if(isset($_POST['Send'])){
            		$result = mysqli_query($dtb, $query);
                	$tab = array();
            		while ($donnee = mysqli_fetch_assoc($result))
            			{
            				//print_r($donnee);
            				array_push($tab, "
                                            <div class='ui segment tall stacked'>
                                            <div class='ui grid'>
                                                <div class='ui eight wide column'>

                                                    <div class='ui label violet'><small>Expediteur</small></div><a href='user.php?user_id=". $donnee['ID'] ."'>"
                                                    . $donnee['email_exp'] . 
                                                    "</a><br /><small>Cliquez sur l'adresse email pour voir le profil de l'utilisateur.</small><br><br>"
                                                    ."<div class='ui label violet'><small>Destinataire</small></div>"
                                                    . $donnee['email_dest'] .
                                                    "<br /><br><br>" .
                                                   
                                                    "</div> 
                                                    <div class='ui eight wide column'>
                                                    <div class='ui segment raised bordered orange' style='overflow: auto; max-height: 400px; overflow-x: hidden;'>
                                                   <div class='ui label left top attached orange' style='border-radius:0px 0px 5px 0px !important;'>Message</div>
                                                        <h4 class='ui horizontal divider header'>"
                                                            . $donnee['titre']  . "
                                                        </h4>
                                                  " . $donnee['msg'] .
                                                   "</div>".
                                                 "</div> 
                                              </div> 
                                           </div><br /><br />") ;		
            			} 
            	// var_dump($_SESSION);
                $t->assign('tab', $tab);
           	//}
           	$t->draw('msg');
           ?>