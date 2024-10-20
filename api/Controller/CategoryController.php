<?php
require_once "Controller.php";
require_once "Repository/CategoryRepository.php" ;


// This class inherits the jsonResponse method  and the $cnx propertye from the parent class Controller
// Only the process????Request methods need to be (re)defined.

class CategoryController extends Controller {

    private CategoryRepository $category;

    public function __construct(){
        $this->category = new CategoryRepository();
    }

   
    protected function processGetRequest(HttpRequest $request) {
        $id = $request->getId("id");
        if ($id){
            // URI is .../category/{id}
            $p = $this->category->find($id);
            return $p==null ? false :  $p;
        }
        else{
        return $this->category->findAll();

        }
    }

    protected function processPostRequest(HttpRequest $request) {
        return false;
    }
   
}

?>