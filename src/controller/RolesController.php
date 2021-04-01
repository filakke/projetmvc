 <?php
 namespace src\controller;
 use libs\system\Controller;
 use src\model\RolesDb;

 class RolesController extends Controller
 {
	  public function add()
	  {
			return $this->view->load("roles/add");
	  }

	  public function getAll()
	  {
			$rolesdao = new RolesDb();
			$roles =;//array("ROLE_USER","ROLE_ADMIN")
			return $this->view->load("roles/getAll",$roles);
	  }
	   public function delete($id)
	  {
			echo $id;
			// return $this->view->load("roles/add");
	  }
 }
 ?>   