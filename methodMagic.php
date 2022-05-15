<?php


    class Verre {
        public $nom; 
        public $materiaux; 
        public $contenu; 
    function __construct($nom, $materiaux, $contenu){

        //se déclenche sur l'instanciain de l'objet 
        //echo "<p> Création de l'objet <p>"; 

        $this->nom= $nom; 
        $this->materiaux=$materiaux; 
        $this->contenu =$contenu; 

    }



}
$gobelet= new Verre("Gobelet", "Plastique", "Eau");
$mug = new Verre("mug","metal","slug"); 

$mug->nom ="Mug"; 
$mug->materiaux ="Métal"; 
$mug->contenu = "Lait"; 

var_dump($gobelet);
var_dump($mug);
class Voiture{
    public $modele;
    public $couleur;

    function __construct($modele, $couleur)
    {
        $this->modele = $modele;
        $this->couleur = $couleur;
        echo "une $this->modele $this->couleur a été créé";
    }
}

// $lexus= new Voiture("Lexus IS300H","Gris clair"); 

// ---------DataBase POO------------

class dataBase {
    public $bdd;
    public $myGames;
    public $nom;
    public $prenom;
    public $code_postal;
    public $celibataire;
    public $salaire;
    public $photo;
    public $niveau;

    function __construct()
    {
        $this->date_creation = date('d-m-y h:i:s');
        $this->bdd = new PDO('mysql:host=localhost;dbname=gta_rp','root','');
    }

    function liaison(){
        $this->nom = 'soufiane';
        $this->prenom = 'dupont';
        $this->code_postal = 33150;
        $this->celibataire = false;
        $this->salaire = 15000;
        $this->photo = null;
        $this->niveau = 80 ;
    }

    function creat(){
        $this->liaison();
        $req = $this->bdd->prepare('INSERT INTO utilisateur VALUES (NULL, :nom, :prenon, :code_postal, :celibataire, :salaire, :photo, :niveau, :date_creation)');

        $req->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $req->bindValue(':prenon', $this->prenom, PDO::PARAM_STR);
        $req->bindValue(':code_postal', $this->code_postal, PDO::PARAM_INT);
        $req->bindValue(':celibataire', $this->celibataire, PDO::PARAM_BOOL);
        $req->bindValue(':salaire', $this->salaire, PDO::PARAM_INT);
        $req->bindValue(':photo', $this->photo, PDO::PARAM_STR);
        $req->bindValue(':niveau', $this->niveau, PDO::PARAM_INT);
        $req->bindValue(':date_creation', $this->date_creation);
        $req->execute();
        $this->myGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

    }
 
}

$db = new Database(); // grace à __construct connexion à la bdd

// var_dump($db->myGames); // TEST 1 rien à ce moment normal !


// $db->creat();


// -----------destruc---unset-------------

class Chicken {
    function __construct()
    {
        echo "<p> Object créer </p>";
    }
    function __destruct()
    {
        echo "<p> Object detruit </p>";
    }
}

$nugget= new Chicken();

unset($nugget);
