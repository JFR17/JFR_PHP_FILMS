<?php


// Contient la date courante
$current_date = date("d/m/Y");

// Contient le titre de la page 
$title = "Ma liste de films du ".$current_date;

// Contient les données de films
$data = array();

// Ouvrir le fichier CSV
if (($handle = fopen("films.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        //array_push(&$data, $row);
        // Autre facon d'ajouter du contenu das un tableau
        $data[] = $row;
    }
    fclose($handle);
}
// Debug
//var_dump($data);

///////////////
// FONCTIONS //
///////////////
// Afficher une ligne de la liste
function show_row($row) {
    $film = new Film($row);
    echo "<li><a href='details.php?film".$film->id."'>".$film."</a></li>";
}

// Select des types de films
function show_select_types_film() {
    global $data;
    $types = array(); 
    foreach ($data as $row) {
        if (!in_array($row[3], $types) && $row[3] != "Type") {
            array_push($types, $row[3]);
            echo "<li role='type'><a role='menuitem' href='#'>".$row[3].'</a></li>';
        }
    } 
}

///////////////
// OBJETS    //
///////////////
// Classe destinée a contenir les propriétés d'un film
class Film {
    public $id;
    public $title;
    public $image;
    public $type;
    public $year;
    public $country;
    public $director;
    public $length;
    public $abstract;

    public function __construct($row) {
        $this->id = $row[0];
        $this->title = $row[1];
        $this->image = $row[2];
        $this->type = $row[3];
        $this->year = $row[4];
        $this->country = $row[5];
        $this->director = $row[6];
        $this->length = $row[7];
        $this->abstract = $row[8];
    }

    public function __toString(){
        return $this->title.", ".$this->type;
    }
}

// Classe qui permet de récuperer les informations d'un film aà partir de son ID
class Finder {
    private $_data;

    public function __construct($data) {
        $this->_data = $data;
    }

    public function find($id) {
        foreach ($this->_data as $row) {
            if ($row[0]==$id) {
                return new Film($row);
            }
        }
        Return NULL;
    }
}

?>
