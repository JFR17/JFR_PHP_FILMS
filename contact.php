<?php

// Cette page a pour fonction d'afficher une liste de films sortis en BlueRay

include ("fonctions.php");

//Recuperation de variables de contact
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$email=$_GET['email'];
$tel=$_GET['tel'];
$adresse=$_GET['adresse'];
$ville=$_GET['ville'];
$codepostal=$_GET['codepostal'];
$siteweb=$_GET['siteweb'];
$question=$_GET['question'];
$contact=$_GET['contact'];
//debug
//echo "-> ".$nom." - ".$prenom." - ".$email." - ".$tel." - ".$adresse." - ".$ville." - ".$codepostal." - ".$siteweb." - ".$question." - ".$contact." <-";

?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $title;?> </title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/bootstrap.theme.css" rel="stylesheet" />
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--Dependances-->
        <link rel='stylesheet prefetch' href='css/bootstrapValidator.min.css'>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
        <script src="js/contact.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li> <a href="/"> Films </a></li>
                        <li> <a href="apropos.php"> A propos </a></li>
                        <li class="active"> <a href="contact.php"> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <form class="well form-horizontal" action=" " method="get"  id="contact_form">
        <fieldset>
            <legend> Vous avez une question, ou besoin d'un renseignement ? </legend>
            <!--Nom-->
            <div class="form-group">
                <label class="col-md-4 control-label">Nom</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="nom" placeholder="Votre nom" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--Prenom--> 
            <div class="form-group">
                <label class="col-md-4 control-label">Prénom</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="prenom" placeholder="Votre prénom" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--email-->
            <div class="form-group">
                <label class="col-md-4 control-label">e-Mail</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input  name="email" placeholder="Votre adresse électronique" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--telephone-->
            <div class="form-group">
                <label class="col-md-4 control-label">Téléphone</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input  name="tel" placeholder="Votre numéro de téléphone" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--adresse-->
            <div class="form-group">
                <label class="col-md-4 control-label">Adresse</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input  name="adresse" placeholder="Votre adresse" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--ville-->
            <div class="form-group">
                <label class="col-md-4 control-label">Ville</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input  name="ville" placeholder="Ville" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--code postale-->
            <div class="form-group">
                <label class="col-md-4 control-label">Code postal</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input  name="codepostal" placeholder="Code postal" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--site web-->
            <div class="form-group">
                <label class="col-md-4 control-label">Site Web</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        <input  name="siteweb" placeholder="Avez vous un site web ?" class="form-control"  type="text">
                    </div>
                </div>
            </div>
            <!--question-->
            <div class="form-group">
                <label class="col-md-4 control-label">Demande de renseignement</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="question" placeholder="Votre question"></textarea>
                    </div>
                </div>
            </div>
            <!--Affichage du message d'envoi si tous les parametres sont corrects-->
<?php
if(isset($contact)){
    echo "TENTATIVE D'ENVOI DU MESSAGE";
    //if(!isset($toto)){
    if(!isset($nom) || !isset($contact) || !isset($email) || !isset($adresse) || !isset($ville) || !isset($codepostal) || !isset($question)){
        echo "ECHEC D'ENVOI DU MESSAGE";
?>
        <div class="alert alert-danger" role="alert" id="danger_message">Envoi impossible ! <i class="glyphicon glyphicon-thumbs-up"></i> Vérifiez les paramètres ci-dessus et recommencez.</div>
<?php
    } else {
    echo "MESSGE ENVOYE";
?>
            <div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Votre message a été transmis avec succès, nous vous répondrons dans les plus bref délais.</div>
<?php
    }
}
?>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary" name="contact" value="contact"> Envoyer <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
        </form>
        </div>
    </body>
    </html>