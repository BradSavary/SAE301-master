<?php
/**
 *  Class Category
 * 
 *  Représente un produit avec uniquement 3 propriétés (id, name, category)
 * 
 *  Implémente l'interface JsonSerializable 
 *  qui oblige à définir une méthode jsonSerialize. Cette méthode permet de dire comment les objets
 *  de la classe Category doivent être converti en JSON. Voire la méthode pour plus de détails.
 */
class Category implements JsonSerializable {
    private int $id_category; // id du produit
    private string $libelle_cate; // nom du produit

 
    public function __construct(int $id_category){

        $this->id_category = $id_category;


    }

    /**
     * Get the value of id
     */ 
    public function getIdcategory(): int
    {
        return $this->id_category;
    }

    /**
     *  Define how to convert/serialize a Category to a JSON format
     *  This method will be automatically invoked by json_encode when apply to a Category
     * 
     *  En français : On sait qu'on aura besoin de convertir des Category en JSON pour les
     *  envoyer au client. La fonction json_encode sait comment convertir en JSON des données
     *  de type élémentaire. A savoir : des chaînes de caractères, des nombres, des booléens
     *  des tableaux ou des objets standards (stdClass). 
     *  Mais json_encode ne saura pas convertir un objet de type Category dont les propriétés sont
     *  privées de surcroit. Sauf si on définit la méthode JsonSerialize qui doit retourner une
     *  représentation d'un Category dans un format que json_encode sait convertir (ici un tableau associatif)
     * 
     *  Le fait que Category "implémente" l'interface JsonSerializable oblige à définir la méthode
     *  JsonSerialize et permet à json_encode de savoir comment convertir un Category en JSON.
     * 
     *  Parenthèse sur les "interfaces" : Une interface est une classe (abstraite en générale) qui
     *  regroupe un ensemble de méthodes. On dit que "une classe implémente une interface" au lieu de dire 
     *  que "une classe hérite d'une autre" uniquement parce qu'il n'y a pas de propriétés dans une "classe interface".
     * 
     *  Voir aussi : https://www.php.net/manual/en/class.jsonserializable.php
     *  
     */
    public function JsonSerialize(): mixed{
        return ["id_category" => $this->id_category, "libelle_cate" => $this->libelle_cate];
    }

    /**
     * Get the value of libelle
     */ 
    public function getlibelleCate()
    {
        return $this->libelle_cate;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setlibelleCate($libelle_cate): self
    {
        $this->libelle_cate = $libelle_cate;
        return $this;
    }



    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setIdCategory($id_category): self
    {
        $this->id_category = $id_category;
        return $this;
    }
    
    
}
