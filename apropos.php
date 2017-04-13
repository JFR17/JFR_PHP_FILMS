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
                        <li> <a href="/"> Films </a></li>
                        <li class="active"> <a href="#"> A propos </a></li>
                        <li> <a href="contact.php"> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron text-center">
                <h2>A propos de ce site</h2>
                <p>Paragraphe qui regroupe les informations obligatores d'un site internet.</p> 
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <h3>Information 1</h3>
                    <p>blablablablabla</p>
                    <p>bliblibliblibli bliblibli bliblu bli blibli</p>
                </div>

                <div class="col-sm-4">
                    <h3>Information 2</h3>
                    <p>blablablablabla</p>
                    <p>bliblibliblibli bliblibli bliblu bli blibli</p>
                </div>

                <div class="col-sm-4">
                    <h3>Information 3</h3> 
                    <p>blablablablabla</p>
                    <p>bliblibliblibli bliblibli bliblu bli blibli</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <h3>Information 4</h3>
                    <p>blablablablabla</p>
                    <p>bliblibliblibli bliblibli bliblu bli blibli</p>
                </div>

                <div class="col-sm-4">
                    <h3>Information 5</h3>
                    <p>blablablablabla</p>
                    <p>bliblibliblibli bliblibli bliblu bli blibli</p>
                </div>
                
                <div class="col-sm-4">
                    <h3>Information 6</h3> 
                    <p>blablablablabla</p>
                    <p>bliblibliblibli bliblibli bliblu bli blibli</p>
                </div>
            </div>
        </div>
    </body>
    </html>