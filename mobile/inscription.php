<?php
    session_start();
        include('controleur/controleur.php');        
        $unControleur = new Controleur ("localhost","dbmobiles","root", "");

    if (isset($_SESSION['idCl']))
        {
            header('Location: index.php');
            exit;
        }
    if(!empty($_POST))
        {
        extract($_POST);
        $valid = true;
        if (isset($_POST['inscription']))
            {
                $nom     = htmlentities(trim($nom));
                $prenom  = htmlentities(trim($prenom));
                $email    = htmlentities(strtolower(trim($email)));
                $mdp     = trim($mdp);
                $confmdp = trim($confmdp);
                if(empty($nom))
                    {
                        $valid  = false;
                        $er_nom = ("Le nom ne peut pas être vide");
                    }

                if(empty($prenom))
                    {
                        $valid     = false;
                        $er_prenom = ("Le prenom ne peut pas être vide");
                    }

                    if(empty($username))
                    {
                        $valid     = false;
                        $er_username = ("Le username ne peut pas être vide");
                    }

                if(empty($sexe))
                    {
                        $valid     = false;
                        $er_sexe = ("Veuillez choisir le sexe");
                    }

                if(empty($email))
                    {
                        $valid   = false;
                        $er_mail = "Le mail ne peut pas être vide";
                    }
                    elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email))
                        {
                            $valid   = false;
                            $er_mail = "Le mail n'est pas valide";
                        }
                        else
                            {
                                $unControleur->setTable("client");
                                $champ    = array("email");
                                $where    = array("email"=>$email);
                                $resultat = $unControleur->selectWhere ($champ, $where);               

                                if ($resultat['email'] <> "")
                                    {
                                        $valid   = false;
                                        $er_mail = "Ce mail existe déjà";
                                    }
                            }

                if(empty($mdp)) 
                    {
                        $valid  = false;
                        $er_mdp = "Le mot de passe ne peut pas être vide";
                    }
                    elseif($mdp != $confmdp)
                        {
                            $valid  = false;
                            $er_mdp = "La confirmation du mot de passe ne correspond pas";
                        }

                if($valid){
                            $mdp = crypt($mdp, "VOTRE CLÉ UNIQUE DE CRYPTAGE DU MOT DE PASSE");
                            $date_creation_compte = date('Y-m-d H:i:s');                
                            $unControleur->setTable("client");
                            $tab = array("nomCl"=>$nom, "prenomCl"=>$prenom, "username"=>$username,"sexe"=>$sexe,"email"=>$email, "mdp"=>$mdp,
                                         "date_creation_compte"=>$date_creation_compte,"level"=>"1","n_mdp"=>"0");
                            $unControleur->insert($tab);

                            header('Location: connexion.php');
                            exit;
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


		<div class="col-md-8 midcontinscript">
			
			<div class="row mt-3">
                <!-- <div class="col-sm-0 col-md-2 col-lg-3"></div> -->
                <div class="col-sm-6 col-md-8 col-lg-6 inscript">
					
					<div class="cdr-ins">
                     <h1 class="h1inscript">Inscription</h1>
                    <form method="post">

                        <?php
                            if (isset($er_nom)){
                            ?>
                                <div class="er-msg"><?= $er_nom ?></div>
                            <?php
                            }
                        ?>
                        <div class="form-group">
                            <input class="form-control"  type="text" placeholder="Votre nom" name="nom" pattern="[A-Za-z]*" value="<?php if(isset($nom)){ echo $nom; }?>">
                        </div>
                        <?php
                            if (isset($er_prenom)){
                            ?>
                                <div class="er-msg"><?= $er_prenom ?></div>
                            <?php
                            }
                        ?>
                        <div class="form-group">
                        <input class="form-control" type="text" placeholder="Votre prénom" name="prenom" pattern="[A-Za-z]*" value="<?php if(isset($prenom)){ echo $prenom; }?>">
                        </div>

                        <?php
                            if (isset($er_username)){
                        ?>
                                <div class="er-msg"><?= $er_username ?></div>
                        <?php
                            }
                        ?>
                        <div class="form-group">
                        <input class="form-control" type="text" placeholder="Votre username" name="username" pattern="[A-Za-z]*" value="<?php if(isset($username)){ echo $username; }?>">
                        </div>


                        <?php
                            if (isset($er_sexe)){
                        ?>
                                <div class="er-msg"><?= $er_sexe ?></div>
                        <?php
                            }
                        ?>
                        <div class="form-group divsexe">

                            <input class="inputhomme" type="radio" name="sexe" value="1">Homme
                            <input class="inputfemme" type="radio" name="sexe" value="2">Femme
                        </div> 

                        <?php
                            if (isset($er_mail)){
                            ?>
                                <div class="er-msg"><?= $er_mail ?></div>
                            <?php
                            }
                        ?>
                         <div class="form-group">
                            <input class="form-control" type="email" placeholder="Adresse mail" name="email" value="<?php if(isset($email)){ echo $email; }?>">
                        </div>

                        <?php
                            if (isset($er_mdp)){
                            ?>
                                <div class="er-msg"><?= $er_mdp ?></div>
                            <?php
                            }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Confirmer le mot de passe" name="confmdp">
                        </div>

                        <div>
                            <button class="btn btn-primary btninscript" type="submit" name="inscription">Envoyer</button>
                        </div>
                    </form>
                </div>


					




                    	<!-- ======================= -->
                   
                </div>
            </div>

	</div><!-- End MidCont -->

<?php require_once('core/footer.php'); ?>

