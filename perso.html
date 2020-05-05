<?php
if(empty($_SESSION['id']) && empty($_SESSION['mdp'])){
    session_start();
}
if ((empty($_POST['id']) && empty($_POST['mdp'])) && (empty($_SESSION['id']) && empty($_SESSION['mdp']))){
        $ok = FALSE;
    
}
else{
    if((empty($_SESSION['id']) && empty($_SESSION['mdp'])) || ($_SESSION['id'] == NULL || $_SESSION['mdp']==NULL)){
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['id'] = $_POST['id'];
    
    }
    $ok = TRUE;
}
include('connexion.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aquarium</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php
    include('menu.html');
    ?>
    
	<h2 class="headline">
		Espace personnel
	</h2>
	
	<p>
		<?php
        if($ok == FALSE){
        //formulaire
        ?>
        
        <form method = 'POST' action = 'perso.php'>
            <input type="text" name="id" placeholder="Votre Identifiant">
            <input type="password" name="mdp" placeholder="Votre Mot De Passe">
            <input type="submit" name="valider" value="OK">
         </form>
        <?php
        }

        if($ok == TRUE){
            
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                $mdp = $_POST['mdp'];
            }
            else{
                echo "  1 ";
                $id = $_SESSION['id'];
                $mdp = $_SESSION['mdp'];
            }
            
            $auth = $cnx->query("SELECT num_secu,mdp FROM employe");
            $ver = 0;
            
            foreach($auth as $l){
                if($l['num_secu'] == $id && $l['mdp'] == $mdp){
                    $ver = 1;
                }
            }
            if($ver == 0){
                echo "authentification incorrecte";
                
            }
            
            else{
                
                $employe = $cnx->query("SELECT num_secu,nom,prenom FROM employe;");
                
                ?>
                
                <table>
                <tr><th>id</th><th>nom</th><th>prénom</th></tr>
                
                <?php
                    foreach($employe as $li){
                        echo "<tr><td>".$li['num_secu']."</td><td>".$li['nom']."</td><td>".$li['prenom']."</td></tr>";
                    }
                ?>
                
                </table>
                
                <br/><br/>
                
                
                
                <?php
                $act = $cnx->query("select * from affecter,edt WHERE edt.id_edt=affecter.id_edt AND num_secu = '".$id."';");
        ?>
                
                
                <table>
                    <tr><th>activité</th><th>jour</th><th>H-départ</th><th>H-fin</th><th>publique</th><th>bassin</th></tr>
                
                <?php
                
                    foreach($act as $ligne){
                            echo "<tr><td>",$ligne['activite'],"</td><td>",$ligne['jour'],"</td><td>",$ligne['heure_depart'],"</td><td>",$ligne['heure_fin'],"</td><td>",$ligne['publique'],"</td><td>",$ligne['id_bassin'],"</td></tr>";
                    }
                ?>
                </table>
                 
                 <br/><br/><br/>
                 
                <?php
                    if(isset($_POST['ajout'])){
                        $act = $_POST['act'];
                        $jour_a = $_POST['jour'];
                        $h_deb_aj = $_POST['H_deb'];
                        $h_fin_aj = $_POST['H_fin'];
                        $pub_a = $_POST['pub'];
                        $bass_a = $_POST['bass'];
                        $id_emp_aj = $_POST['id_empl'];
                        
                        $ajouter = $cnx->prepare("INSERT INTO edt VALUES(DEFAULT,?,?,?,?,?,?) RETURNING id_edt");
                        $ajouter->execute(array($act,$jour_a,$h_deb_aj,$h_fin_aj,$pub_a,$bass_a));
                        $fg = $cnx->prepare("INSERT INTO  affecter VALUES(?,?)");
                        $fg->execute(array($ajouter->fetch()['id_edt'],$id_emp_aj));
                        
                        echo $ajouter->fetch()['id_edt'];
                    }
                        
                    if(isset($_POST['modif'])){
                        $id_act = $_POST['id_act_mod'];
                        $act = $_POST['act'];
                        $jour_mod = $_POST['jour'];
                        $h_deb_mod = $_POST['H_deb'];
                        $h_fin_mod = $_POST['H_fin'];
                        $pub_mod = $_POST['pub'];
                        $bass_mod = $_POST['bass'];
                        $id_emp_mod = $_POST['id_empl'];
                        
                        $modifier = $cnx->prepare("UPDATE edt SET activite = ?, jour = ?, heure_depart = ?, heure_fin = ?, publique = ?, id_bassin = ? WHERE id_edt = ?");
                        $modifier->execute(array($act,$jour_mod,$h_deb_mod,$h_fin_mod,$pub_mod,$bass_mod,$id_act));
                        $modif = $cnx->prepare("UPDATE affecter SET num_secu = ? WHERE id_edt = ?");
                        $modif->execute(array($id_emp_mod,$id_act));
                        //a l'aide monsieur!!!!! JEANNEEEE, AU S'COURS!!!!!!
                    } 
                    
                    if(isset($_POST['suppr']) && isset($_POST['id_act_suppr'])){
                        $id_act_suppr = $_POST['id_act_suppr'];
                        
                        $supprimer = $cnx->prepare("DELETE FROM edt WHERE id_edt = ?");
                        $suppr = $cnx->prepare("DELETE FROM affecter WHERE id_edt = ?");
                        $supprimer->execute(array($id_act_suppr));
                        $suppr->execute(array($id_act_suppr));
                    }
                  
                    //partie 1: ajout (ne pas actualiser pls)
                    echo "liste des activité des bassins dont vous êtes responsable <br/>\n"; 
                    $act_resp = $cnx->query("SELECT edt.id_edt,activite,jour,heure_depart,heure_fin,publique,id_bassin,num_secu FROM edt,affecter WHERE id_bassin IN (SELECT id_bassin FROM bassin WHERE num_resp = '".$id."') AND edt.id_edt=affecter.id_edt ORDER BY edt.id_edt;");
                    ?>
                    
                  
                    <table>
                    <tr>
                        <th>Identifiant</th>
                        <th>Activité</th>
                        <th>Jour</th><th>H-depart</th>
                        <th>H-fin</th><th>publique</th>
                        <th>bassin</th>
                        <th>Employé</th>
                        </tr>
                     
                    
                    <?php
                    foreach($act_resp as $ligne){
                    
                    echo "<tr><td>".$ligne['id_edt']."</td><td>".$ligne['activite']."</td><td>".$ligne['jour']."</td><td>".$ligne['heure_depart']."</td><td>".$ligne['heure_fin']."</td><td>".$ligne['publique']."</td><td>".$ligne['id_bassin']."</td><td>".$ligne['num_secu']."</td></tr>";
                    
                    }
                    ?>
                    
                    </table> <br/><br/>
                    
                    
                    Pour ajouter une activité, veuillez remplir toutes les cases suivantes: <br/>
                    <form method = 'POST' action = 'perso.php'>
                        activité <input type="text" name="act" size=20 ><br/>
                        <label for="jour">Entrer le jour:</label>
                        <input type = "date" id="jour" name="jour" min="1980-01-01" max="2070-12-31"><br/>
                        heure de début: <input type="time" name="H_deb"><br/>
                        heure de fin: <input type="time" name="H_fin"><br/>
                        publique: <select name="pub">
                                  <option value="F" selected="selected">privé</option>
                                  <option value="T">publique</option>
                                  </select> <br/>
                        bassin n° <select name="bass">
                        
                        <?php
                            $bass_resp = $cnx->query("SELECT id_bassin FROM bassin WHERE num_resp = '".$id."';");

                        foreach($bass_resp as $ligne){
                            
                                echo "<option value=".$ligne['id_bassin'].">".$ligne['id_bassin']."</option>";
                            
                            
                        }
                        ?>
                        
                                  </select> <br/>
                        <input type="text" name="id_empl" maxlength="15" placeholder="Identifiant de l'employé affecté">
                        <input type="hidden" name="id" value= "<?php echo $id ?>" >
                        <input type = "hidden" name="mdp" value = "<?php echo $mdp ?>" >
                        <input type="submit" name="ajout" value="valider">
                    </form>
                
                <br/><br/>
                
                <?php //partie2 : modification (vous pouvez actualiser) ?>
                    Pour modifier une activité, veuillez entrer son identifiant et les nouvelles valeurs: <br/>
                    <form method = 'POST' action = 'perso.php'>
                        <input type="text" name="id_act_mod" maxlength="3" placeholder="Identifiant de l'activité"> <br/>
                        activité <input type="text" name="act" size=20 ><br/>
                        <label for="jour">Entrer le jour:</label>
                        <input type = "date" id="jour" name="jour" min="1980-01-01" max="2070-12-31"><br/>
                        heure de début: <input type="time" name="H_deb"><br/>
                        heure de fin: <input type="time" name="H_fin"><br/>
                        publique: <select name="pub">
                                  <option value="F" selected="selected">privé</option>
                                  <option value="T">publique</option>
                                  </select> <br/>
                        bassin n° <select name="bass">
                        
                        <?php
                            $bass_resp = $cnx->query("SELECT id_bassin FROM bassin WHERE num_resp = '".$id."';");

                        foreach($bass_resp as $ligne){
                            
                                echo "<option value=".$ligne['id_bassin'].">".$ligne['id_bassin']."</option>";
                            
                            
                        }
                        ?>
                        
                                  </select> <br/>
                        <input type="text" name="id_empl" maxlength="15" placeholder="Identifiant de l'employé affecté">
                        <input type="hidden" name="id" value= "<?php echo $id ?>" >
                        <input type = "hidden" name="mdp" value = "<?php echo $mdp ?>" >
                        <input type="submit" name="modif" value="valider">                    
                    </form>
                    
                    <br/><br/>
                    
                <?php //partie3 : suppression (vous pouvez actualiser) ?>
                
                    Pour supprimer une activité, veuillez entrer son identifiant:
                    <form method = 'POST' action = 'perso.php'>
                        <input type="text" name="id_act_suppr" maxlength="3" placeholder="Identifiant de l'activité"> <br/>
                            <input type="hidden" name="id" value= "<?php echo $id ?>" >
                            <input type = "hidden" name="mdp" value = "<?php echo $mdp ?>" >
                            <input type="submit" name="suppr" value="valider">                    
                    </form>

                    <nav class="menu-nav">
                            <ul>
                                <li class="bouton">
                                    <a href="perso.php">
                                        Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </nav>
            
<?php
            }
        }
        
        session_destroy();
        ?>
        
        
	</p>
</body>

</html>
