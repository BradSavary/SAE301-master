<?php

require_once("Repository/EntityRepository.php");
require_once("Class/Category.php");
require_once("Class/Product.php");

/**
 *  Classe ProductRepository
 * 
 *  Cette classe représente le "stock" de Product.
 *  Toutes les opérations sur les Product doivent se faire via cette classe 
 *  qui tient "synchro" la bdd en conséquence.
 * 
 *  La classe hérite de EntityRepository ce qui oblige à définir les méthodes  (find, findAll ... )
 *  Mais il est tout à fait possible d'ajouter des méthodes supplémentaires si
 *  c'est utile !
 *  
 */
class CategoryRepository extends EntityRepository {

    public function __construct(){
        // appel au constructeur de la classe mère (va ouvrir la connexion à la bdd)
        parent::__construct();
    }

    public function find($id_category): ?Category {
        $requete = $this->cnx->prepare("select * FROM `Category` WHERE id_category= :value"); // prepare la requête SQL
        $requete->bindParam(':value', $id_category); // fait le lien entre le "tag" :value et la valeur de $id
        $requete->execute(); // execute la requête
        $answer = $requete->fetch(PDO::FETCH_OBJ);
        
        if ($answer == false) return null; // may be false if the sql request failed (wrong $id value for example)
        
        $c = new Category($answer->id_category);
        $c->setLibelleCate($answer->libelle_cate);

        return $c;
    }

    public function findAll(): array {
        $requete = $this->cnx->prepare("select * from Category");
        $requete->execute();
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);

        $res = [];
        foreach($answer as $obj){
            $c = new Category($obj->id_category);
            $c->setLibelleCate($obj->libelle_cate);

            array_push($res, $c);
        }
       
        return $res;
    }
    
    // public function save($product){
    //     $requete = $this->cnx->prepare("insert into Product (name, category) values (:name, :idcategory)");
    //     $name = $product->getName();
    //     $idcat = $product->getIdcategory();
    //     $requete->bindParam(':name', $name );
    //     $requete->bindParam(':idcategory', $idcat);
    //     $answer = $requete->execute(); // an insert query returns true or false. $answer is a boolean.

    //     if ($answer){
    //         $id = $this->cnx->lastInsertId(); // retrieve the id of the last insert query
    //         $product->setId($id); // set the product id to its real value.
    //         return true;
    //     }
          
    //     return false;
    // }

    // public function delete($id){
    //     // Not implemented ! TODO when needed !
    //     return false;
    // }

    // public function update($product){
    //     // Not implemented ! TODO when needed !
    //     return false;
    // }

   
    
}
