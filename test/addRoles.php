<?php
	require_one '../bootstrap.php';

	$role = new Roles();
	//$role->setId(1);
	$role->setNom("ROLE8USER");

	$entityManager->persist($role);
	$entityManager->flush();

	echo $role->getId();

?>