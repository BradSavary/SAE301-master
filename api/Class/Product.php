<?php
/**
 *  Class Product
 * 
 *  Représente un produit avec uniquement 3 propriétés (id, name, category)
 * 
 *  Implémente l'interface JsonSerializable 
 *  qui oblige à définir une méthode jsonSerialize. Cette méthode permet de dire comment les objets
 *  de la classe Product doivent être converti en JSON. Voire la méthode pour plus de détails.
 */
class Product implements JsonSerializable {
    private int $id; // id du produit
    private string $libelle; // nom du produit
    private int $price; // id de la catégorie du produit
    private string $description; // description du produit
    private int $stock; // stock du produit 
    private array $size; // tableau des sizes disponibles pour le produit
    private array $couleur; // tableau des couleurs disponibles pour le produit
 
    public function __construct(int $id){

        $this->id = $id;


    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     *  Define how to convert/serialize a Product to a JSON format
     *  This method will be automatically invoked by json_encode when apply to a Product
     * 
     *  En français : On sait qu'on aura besoin de convertir des Product en JSON pour les
     *  envoyer au client. La fonction json_encode sait comment convertir en JSON des données
     *  de type élémentaire. A savoir : des chaînes de caractères, des nombres, des booléens
     *  des tableaux ou des objets standards (stdClass). 
     *  Mais json_encode ne saura pas convertir un objet de type Product dont les propriétés sont
     *  privées de surcroit. Sauf si on définit la méthode JsonSerialize qui doit retourner une
     *  représentation d'un Product dans un format que json_encode sait convertir (ici un tableau associatif)
     * 
     *  Le fait que Product "implémente" l'interface JsonSerializable oblige à définir la méthode
     *  JsonSerialize et permet à json_encode de savoir comment convertir un Product en JSON.
     * 
     *  Parenthèse sur les "interfaces" : Une interface est une classe (abstraite en générale) qui
     *  regroupe un ensemble de méthodes. On dit que "une classe implémente une interface" au lieu de dire 
     *  que "une classe hérite d'une autre" uniquement parce qu'il n'y a pas de propriétés dans une "classe interface".
     * 
     *  Voir aussi : https://www.php.net/manual/en/class.jsonserializable.php
     *  
     */
    public function JsonSerialize(): mixed{
        return ["id" => $this->id, "libelle" => $this->libelle, "price" => $this->price, "description" => $this->description, "stock" => $this->stock, "size" => $this->size, "color" => $this->color];
    }

    /**
     * Get the value of libelle
     */ 
    public function getlibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setlibelle($libelle): self
    {
        $this->libelle = $libelle;
        return $this;
    }



    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getprice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setprice($price): self
    {
        $this->price = $price;
        return $this;
    }
    public function getdescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setdescription($description): self
    {
        $this->description = $description;
        return $this;
    }
    public function getstock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setstock($stock): self
    {
        $this->stock = $stock;
        return $this;
    }
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * Set the value of Size
     *
     * @return  self
     */ 
    public function setSize($size): self
    {
        if (is_null($size)) {
            $this->size = [];
        } elseif (is_string($size)) {
            $this->size = explode(',', $size); // Assuming the string is comma-separated
        } elseif (is_array($size)) {
            $this->size = $size;
        } else {
            throw new InvalidArgumentException('Size must be an array or a comma-separated string.');
        }
        return $this;
    }

    /**
     * Set the value of Color
     *
     * @return  self
     */ 
    public function setColor($color): self
    {
        if (is_null($color)) {
            $this->color = [];
        } elseif (is_string($color)) {
            $this->color = explode(',', $color); // Assuming the string is comma-separated
        } elseif (is_array($color)) {
            $this->color = $color;
        } else {
            throw new InvalidArgumentException('Size must be an array or a comma-separated string.');
        }
        return $this;
    }
    
}
