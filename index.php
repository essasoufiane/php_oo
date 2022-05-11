<?php
// $tab['couleur'] = "bleu";
// $tab['type'] = "plume";
// $tab['prix'] = 5;

// $stylo = (object) $tab;

//  print_r($stylo);

//  $ballonFoot = new stdClass;
//  $ballonFoot->type='Football';
//  $ballonFoot->marque='nike';
//  $ballonFoot->taille=5;
//  $ballonFoot->status='crevé';

//  var_dump($ballonFoot);

//  echo "hey le ballon de football, " . $ballonFoot->marque . " est " .$ballonFoot->status . ',Ismael !' . "c'etait un taille " .  $ballonFoot->taille . "c'est ca Issac ?"; 

 
//  ---------syntaxe object operator----------
//  $ballonFoot = new stdClass;
//  $ballonFoot->type='Football';
//  $ballonFoot->marque='nike';
//  $ballonFoot->taille=5;
//  $ballonFoot->status='crevé';

//  var_dump(property_exists($ballonFoot, 'status'));
//  if (!property_exists($ballonFoot, 'prix')) {
//     $ballonFoot->prix=5;
//     echo ($ballonFoot->prix);
//  }

//  var_dump(get_declared_classes());

class Ballon {
    public $marque;
    public $sport;

    function lancer() {
        echo "vous avez lancé le ballon ! <br>";
    }
}

$ballonFoot = new Ballon();
$ballonFoot->marque ='Nike';
$ballonFoot->sport ='Rugby';

$ballonRugby = new Ballon();
$ballonRugby->marque ="Gilbert TM";
$ballonRugby->sport ="Rugby";


// echo "sport $ballonFoot->sport <br> marque: $ballonFoot->marque";
// echo "<br>";
// echo "sport $ballonRugby->sport <br> marque: $ballonRugby->marque";

$ballonFoot->lancer();

class User {

    public $nom;
    public $age;

    function tchater($message){
        echo " - " . $message . "<br>";
    }

}

$michel = new User();

$michel->name = 'michel';
$michel->age = 49;

$michel->tchater("$michel->name : Salut salut !");

// --------aperoxercice----------

class impot{
    public $CA;
  

    function calcule($CA){
        $x = $CA*0.2;
       echo "vous payerais $x € d'impots" ;
    }
}
$impot = new impot();
$impot->calcule(1000);