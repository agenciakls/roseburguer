<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(
	'email' => 'contato@fabiofreitas.com.br',
	
	'facebook' => 'https://www.facebook.com/rose.burguer21',
	'instagram' => 'https://www.instagram.com/rose.burguer21/',
	'whatsapp' => 'https://api.whatsapp.com/send?phone=5521935007990',
	'telefone' => 'tel:21935007990',

	
	'ifood' => 'https://menu.ifood.com.br/773e7c2a-c9b4-4eca-9ecf-0e8901c68b45/catalog',
	'uber' => 'https://www.order.store/br/store/rose-burguer/aTKqCvJHVcG4pJM3Swf7ng?utm_source=web-restaurant-manager',
	'goomer' => 'https://roseburguer.goomer.app/menu',
	


);
InfoVar::save($argVar);
?>