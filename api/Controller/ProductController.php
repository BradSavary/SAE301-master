<?php
require_once "Controller.php";
require_once "Repository/ProductRepository.php" ;


// This class inherits the jsonResponse method  and the $cnx propertye from the parent class Controller
// Only the process????Request methods need to be (re)defined.

class ProductController extends Controller {

    private ProductRepository $products;

    public function __construct(){
        $this->products = new ProductRepository();
    }

   
    protected function processGetRequest(HttpRequest $request) {
        $id = $request->getId("id");
        if ($id){
            // URI is .../products/{id}
            $p = $this->products->find($id);
            return $p==null ? false :  $p;
        }
        elseif ($color = $request->getParam("color")) {
            // URI is .../products?color={color}
            return $this->products->findByColor($color);
        }
        elseif ($size = $request->getParam("size")) {
            // URI is .../products?size={size}
            return $this->products->findBySize($size);
        }
        else{
            // URI is .../products
            $cat = $request->getParam("category"); // is there a category parameter in the request ?
            if ( $cat == false) // no request category, return all products
                return $this->products->findAll();
            else // return only products of category $cat
                return $this->products->findAllByCategory($cat);
        }
    }

    protected function processPostRequest(HttpRequest $request) {
        $json = $request->getJson();
        $obj = json_decode($json);
        $p = new Product(0); // 0 is a symbolic and temporary value since the product does not have a real id yet.
        $p->setlibelle($obj->libelle);
        $p->setPrice($obj->price);
        $p->setDescription($obj->description);
        $p->setStock($obj->stock);
        $p->setSize($obj->size);
        $p->setColor($obj->color);
        $ok = $this->products->save($p); 
        return $ok ? $p : false;
    }
   
}

?>
