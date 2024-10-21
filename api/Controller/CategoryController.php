<?php
require_once "Controller.php";
require_once "Repository/CategoryRepository.php" ;


// This class inherits the jsonResponse method  and the $cnx propertye from the parent class Controller
// Only the process????Request methods need to be (re)defined.

class CategoryController extends Controller {

    private categoryRepository $categorys;

    public function __construct(){
        $this->categorys = new categoryRepository();
    }

   
    protected function processGetRequest(HttpRequest $request) {
        $id = $request->getId("id");
        if ($id){
            // URI is .../categorys/{id}
            $p = $this->categorys->find($id);
            return $p==null ? false :  $p;
        }
        else{
            // URI is .../categorys
            $cat = $request->getParam("category"); // is there a category parameter in the request ?
            if ( $cat == false) // no request category, return all categorys
                return $this->categorys->findAll();
            else // return only categorys of category $cat
                return $this->categorys->findAllByCategory($cat);
        }
    }

    protected function processPostRequest(HttpRequest $request) {
        $json = $request->getJson();
        $obj = json_decode($json);
        $p = new category(0); // 0 is a symbolic and temporary value since the product does not have a real id yet.
        $p->setlibelleCate($obj->libelle_cate);

        $ok = $this->categorys->save($p); 
        return $ok ? $p : false;
    }
   
}

?>
