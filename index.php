<?php

// Cette page a pour fonction d'afficher une liste de films sortis en BlueRay

include ("fonctions.php");

?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>
            <?php echo $title;?> </title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"> <a href="/"> Films </a></li>
                        <li> <a href="#"> A propos </a></li>
                        <li> <a href="#"> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1>
                <?php echo $title; ?> </h1>
                <?php 
                if (count($data)>1) : 
                ?>
                <h2>
                    <?php printf("J'ai actuellement %s films à regarder. Merci de ne pas télécharger illégalement. Pour plus d'informations, attendre a suite du cours", count($data)-1); ?> </h2>
                    <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdowntypes" data-toggle="dropdown"> Types de film  <span class="caret"> </span> </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdowntypes"> <?php show_select_types_film(); ?> </ul>
                        </div>
                    </div>
                <ul>
                    <?php 
                    for ($i=0; $i<count($data); $i++) : 
                        if ($i>0) :
                    ?>
                        <!--<li>
                            <?php echo $data[$i][1]; ?> </li>-->
                            <?php show_row($data[$i]); ?>
                    <?php
                        endif;
                    endfor; 
                    ?>
                </ul>
                <?php
                else :
                ?>
                    <h2> Je n'ai pas de films actuellement. </h2>
                <?php
                endif;
                ?>
        </div>
    </body>

    </html>