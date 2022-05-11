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

// class Ballon {
//     public $marque;
//     public $sport;

//     function lancer() {
//         echo "vous avez lancé le ballon ! <br>";
//     }
// }

// $ballonFoot = new Ballon();
// $ballonFoot->marque ='Nike';
// $ballonFoot->sport ='Rugby';

// $ballonRugby = new Ballon();
// $ballonRugby->marque ="Gilbert TM";
// $ballonRugby->sport ="Rugby";


// echo "sport $ballonFoot->sport <br> marque: $ballonFoot->marque";
// echo "<br>";
// echo "sport $ballonRugby->sport <br> marque: $ballonRugby->marque";

// $ballonFoot->lancer();


// --------aperoxercice----------
?>
<html>

<body>
    <form method="get">
        <label for="CA">inserez votre chiffre d'affaire :</label>
        <input type="text" name="CA">
        <br>
        <label for="prenom">Votre prénom :</label>
        <input type="text" name="prenom">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>


<?php
// var_dump($_GET);
// ---calcul d'impot
class tauxDimposition
{

    public $client = null;
    public $CA;
    public $tauxUrssaf = 0.22;
    public $tauxImpot = 0.017;


    function calcule($CA)
    {
        $u = $CA * $this->tauxUrssaf;
        $i = $CA * $this->tauxImpot;
        $r = $CA - ($u + $i);
        echo "Bonjour $this->client , <br> Pour un chiffre d'affaire de $CA vous devais payer $u € d'urssaf et $i € d'impots. <br> Il vous restera $r €";
    }
}

if (!empty($_GET)) {

    if (!empty($_GET["prenom"] && $_GET["CA"])) {
    
        $soufiane = new tauxDimposition();
        $soufiane->client = $_GET["prenom"];
        $soufiane->calcule($_GET["CA"]);
    }
}else{
    echo 'Inserer vos données';
}
