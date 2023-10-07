<?php

// class Grandmere {

//     protected $nom = 'Balasko';
//     private $prenom = 'Josiane';
//     public $nbdents = 3;

//     public function faitungateau(){
//         return "miam" ;
//     }

//    public function getNom() {
//         return self::$nom;
    
//     }
// }

// class Mere extends Grandmere {

//    protected $nom = 'Berry';
//     private $prenom = 'Ginette';

//     public function faituncookie(){
//         return "MIAM" ;
//     }
// }

// class Fille extends Mere {

//     public function getGMnom() {
//         return Grandmere::$nom;
//     }
// }


// echo "<pre>" ;


// $mamie = new Grandmere ;
// $maman = new Mere ;
// $jessica = new Fille ;

// var_dump($mamie) ;
// var_dump($maman->faituncookie()) ;
// var_dump($jessica->getNom()) ;
// var_dump($jessica->getGMnom()) ;



// class Base {

//     protected function getFoo(){
//         return 'Base';
//     }
// }

// class Child extends Base {

//     protected function getFoo(){
//         return parent::getFoo(). ' Child';
//     }
// }

// class Grandchild extends Child {

//     protected function getFoo(){
//         return parent::getFoo(). ' Grandchild';
//     }
// }

// Le déréférencement


class Tire {

    public $brand = "michelin";


}

class Car {

    public function __construct(){

    }

    public function Tire(){
        return new Tire();
    }
}

$car = new Car();
echo "Tires : ". $car->Tire()->brand ;


// relation inter-classes : 

// 1- Association
//      - binaire Parent/enfant :
//      La classe enfant dépend de la classe Parent
//      mais pas le contraire
//      - binaire : bi-directionnel (les 2 se connaissent)
//      -n-aires : bi-directionnelles entre plusieurs classes
//      -classes d'association : lees relations entre classes sont portées par une classe

// 2- Aggrégation
//    Assemblage FAIBLE entre plusieurs classes
//      aggrégation FAIBLE : les enfants existent sans les parents

// 3- Composition
//    Assemblage FORT entre plusieurs classes
//    Les objets dépendants ne peuvent exister sans l'objet parent

// exemple de code
// Association entre Ville et Client



