<?php

require_once("Repository/EntityRepository.php");
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
class ProductRepository extends EntityRepository {

    public function __construct(){
        // appel au constructeur de la classe mère (va ouvrir la connexion à la bdd)
        parent::__construct();
    }

    public function find($id): ?Product{
        /*
            La façon de faire une requête SQL ci-dessous est "meilleur" que celle vue
            au précédent semestre (cnx->query). Notamment l'utilisation de bindParam
            permet de vérifier que la valeur transmise est "safe" et de se prémunir
            d'injection SQL.
        */
        $requete = $this->cnx->prepare("select * FROM `Product` WHERE id= :value"); // prepare la requête SQL
        $requete->bindParam(':value', $id); // fait le lien entre le "tag" :value et la valeur de $id
        $requete->execute(); // execute la requête
        $answer = $requete->fetch(PDO::FETCH_OBJ);
        
        if ($answer == false) return null; // may be false if the sql request failed (wrong $id value for example)
        
        $p = new Product($answer->id);
        $p->setlibelle($answer->libelle);
        $p->setPrice($answer->price);
        $p->setDescription($answer->description);
        $p->setStock($answer->stock);
        $p->setSize($answer->size);
        $p->setColor($answer->color);
        return $p;
    }

    public function findAll(): array {
        $requete = $this->cnx->prepare("select * from Product");
        $requete->execute();
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);

        $res = [];
        foreach($answer as $obj){
        $p = new Product($obj->id);
        $p->setLibelle($obj->libelle);
        $p->setPrice($obj->price);
        $p->setDescription($obj->description);
        $p->setStock($obj->stock);
        $p->setSize($obj->size);
        $p->setColor($obj->color);
            array_push($res, $p);
        }
       
        return $res;
    }



    public function findByColor($color): array {
        $requete = $this->cnx->prepare("select * from Product where color = :color");
        $requete->bindParam(':color', $color, PDO::PARAM_STR);
        $requete->execute();
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);

        $res = [];
        foreach($answer as $obj){
            $p = new Product($obj->id);
            $p->setlibelle($obj->libelle);
            $p->setPrice($obj->price);
            $p->setDescription($obj->description);
            $p->setStock($obj->stock);
            $p->setSize($obj->size);
            $p->setColor($obj->color);
            array_push($res, $p);
        }
       
        return $res;
    }
    public function findBySize($size): array {
        $requete = $this->cnx->prepare("select * from Product where size = :size");
        $requete->bindParam(':size', $size, PDO::PARAM_STR);
        $requete->execute();
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);

        $res = [];
        foreach($answer as $obj){
            $p = new Product($obj->id);
            $p->setlibelle($obj->libelle);
            $p->setPrice($obj->price);
            $p->setDescription($obj->description);
            $p->setStock($obj->stock);
            $p->setSize($obj->size);
            $p->setColor($obj->color);
            array_push($res, $p);
        }
       return $res;
        
    }
    public function findAllByCategory($category): array {
        // Vérifiez que la catégorie est un entier
        if (!is_int($category)) {
            throw new InvalidArgumentException("La catégorie doit être un entier.");
        }
    
        // Préparez la requête SQL
        $requete = $this->cnx->prepare("
            SELECT Product.* 
            FROM Product 
            INNER JOIN Product_Category ON Product.id = Product_Category.id_product 
            INNER JOIN Category ON Product_Category.id_category = Category.id_category 
            WHERE Category.id_category = :category
        ");
        
        // Liez le paramètre de catégorie
        $requete->bindParam(':category', $category, PDO::PARAM_INT);
        
        // Exécutez la requête
        $requete->execute();
        
        // Récupérez les résultats
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);
        
        // Vérifiez si des produits ont été trouvés
        if (!$answer) {
            return [];
        }
        
        // Transformez les résultats en objets Product
        $res = [];
        foreach ($answer as $obj) {
            $p = new Product($obj->id);
            $p->setLibelle($obj->libelle); // Assurez-vous que cette méthode existe
            $p->setPrice($obj->price);
            $p->setDescription($obj->description);
            $p->setStock($obj->stock);
            $p->setSize($obj->size);
            $p->setColor($obj->color);
            $res[] = $p;
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
    //     $requete = $this->cnx->prepare("UPDATE Product SET  size = :size, color = :color WHERE id = :id");
    //     return false;
    // }

   
    
}
