 <?php
class Autoloader
{
	static function register()
	{
		sql_autoload_register(array(__CLASS__,"autoload"));
	}
	static function Autoloader($class)
	{
		echo $class;
		if(file_exists("src/molel/".$class."php")) 
		{
			require_once "src/molel/".$class."php";
		}
		else if(file_exists("src/coltroller/".$class."php")) 
		{
				require_once "src/coltroller/".$class."php";
		}
		//namespace
		if (file_exists(src_replace("\\","/",$class.".php")))
		{
			require_once src_replace("\\","/",$class.".php");
		}
		else 
		{
			die("Merci d'utiliser le mot cle USE suiv de".$class);
	    }
	}
}  
Autoloader::register();
 ?>