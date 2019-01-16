<?php
    session_start();
    include('controleur/controleur.php');        
    $unControleur = new Controleur ("localhost","dbmobiles","root", "");

    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST))
        {
            extract($_POST);
            $valid = true;
            if (isset($_POST['connexion']))
                {
                    $email   = htmlentities(strtolower(trim($email)));
                    $mdp    = trim($mdp);
                    if(empty($email))
                        { // Vérification qu'il y est bien un mail de renseigné
                            $valid    = false;
                            $er_mail  = "Il faut mettre un mail";
                        }
                    if(empty($mdp))
                        { // Vérification qu'il y est bien un mot de passe de renseigné
                            $valid  = false;
                            $er_mdp = "Il faut mettre un mot de passe";
                        }
                            $unControleur->setTable("client");
                            $champ    = array(" * ");
                            $where    = array("email"=>$email,"mdp"=>crypt($mdp, "VOTRE CLÉ UNIQUE DE CRYPTAGE DU MOT DE PASSE"));
                            $resultat = $unControleur->selectWhere($champ, $where);

                    if ($resultat['idCl'] == "")
                        {  
                            $valid   = false;
                            $er_mail = "Le mail ou le mot de passe est incorrecte";
                        }
                        elseif($resultat['n_mdp'] == 1)
                            { 
                                $unControleur->setTable("client");
                                $tab        = array("n_mdp"=>"0");
                                $where      = array("idCl"=>$resultat['idCl']);
                                $resultat   = $unControleur->update($tab, $where); 

                            }                

                    if ($valid){

                                $_SESSION['idCl']     = $resultat['idCl'];
                                $_SESSION['nomCl']    = $resultat['nomCl'];
                                $_SESSION['prenomCl'] = $resultat['prenomCl'];
                                $_SESSION['email']   = $resultat['email'];

                                if ($resultat['email'] || $resultat['mdp'] ==true)
                                    {   
                                        $_SESSION["level"] = $resultat["level"];
                                        if($_SESSION["level"] ==2)
                                        {
                                            header("Location:admin/index.php");
                                            exit();
                                        }
                                        else
                                        {
                                             $_SESSION["email"]=$email;
                                            header("Location:client/index.php");
                                            exit();                     
                                        }
                                    }  
                       
                    }
            }
    }
?>

<?php require_once('core/header.php'); ?>
    
<div class="container-fluid">
        <div class="row">
            <div class="col-md-2 leftcont">
                <div class="dycalendar-container skin-red shadow-default"  id="calendar"></div>
                <hr>

                <div class="meteo mt-5">
                    <iframe src="https://www.meteoblue.com/en/weather/widget/three/paris_france_2988507?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width:240px;height: 510px"></iframe>          
                </div>  
            
        </div><!-- End leftcont -->


<!-- mid content -->


		<div class="col-md-8 midcont">
			
			<div class="row mt-3">
                <div class="col-sm-6 col-md-8 col-lg-6 inscript">
                    <div class="cdr-ins">
                    <h3 class="h1inscript">CONNEXION</h3>
                    <form method="post">

                        <?php
                            if (isset($er_mail)){
                        ?>
                            <div class="er-msg"><?= $er_mail ?></div>
                        <?php
                            }
                        ?>
                        <div class="form-group">
                            <label for="mail1">Adresse e-mail</label>
                            <input class="form-control" type="email" id="mail1" placeholder="Adresse mail" name="email" value="<?php if(isset($email)){ echo $email; }?>" required>
                        </div>

                        <?php
                            if (isset($er_mdp)){
                        ?>
                            <div class="er-msg"><?= $er_mdp ?></div>
                        <?php
                            }
                        ?>
                        <div class="form-group">
                            <label for="mdp1">Mot de passe</label><a class="amdpoubli" href="motdepasse.php" cl>Mot de passe oublié</a>
                            <input class="form-control" type="password" id="mdp1" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary btninscript" type="submit" name="connexion">Identifiez-vous</button>
                        </div>
                        <div class="checksession">
                            <input type="checkbox"><span class="spancheck">Maintenir ma session ouverte</span>
                        </div>
                         <div class="form-group">
                            <p class="pnouveauclient">Vous êtes nouveau client?</p>
                            <span class="btn btn-primary  creercompte"><a href="incription.php" class="comptbtna">Créer votre compte ici</a></span>
                        </div>
                    </form>

                </div>
                </div>
            </div>

	</div><!-- End MidCont -->

<?php require_once('core/footer.php'); ?>

