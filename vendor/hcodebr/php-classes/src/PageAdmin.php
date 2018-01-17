<?php 

	namespace Hcode;

	/*
	** Classe de definição das páginas de administração do site (extendida da classe Page)
	*/
	class PageAdmin extends Page
	{
		
		function __construct($opts = array(), $tpl_dir = "/views/admin/")
		{
			parent::__construct($opts, $tpl_dir);
		}
	}

?>