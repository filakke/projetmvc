<?php
namespace src\model;
use libs\system\Model;
class RolesDb extends Model
{
	public function findAll()
	{
		return $this->entityManager
					->createQuerry("SELECT r FROM r")
					->getResult();
		
		//array ("ROLE_COMPTA","ROLE_FINANCE");
	}
}
?>