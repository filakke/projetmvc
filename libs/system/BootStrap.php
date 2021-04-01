<?php
namespace libs\system;
class BootStrap
{
	public function __construct()
	{
		if (isset($_GET["url"])) 
		{
			$url = explode("/", $_GET["url"]);

			$controller_file = "src/controller".$url[0]."controller.php";
			if (file_exists($controller_file)) 
			{
				require_once $controller_file;
				$file = $url[0]."Controller";
				$controller_object = new $file();
				if(isset($url[2]))
				{
					$method = $url[1];
					if (method_exists($controller_object,$method))
					$controller_object->$method(($url[2]));
					
					}else {
						die($controller_file."n'existsdans le controller".$file);
				}
			}
				}else if(isset($url[1])){
					$method = $url[1];
					if (method_exists($controller_object,$method))
					$controller_object->$method();
					
					}else {
				die($controller_file."n'existsdans le controller".$file);
				}
			}
				
			}else {
				die($controller_file."n'exists pas");
			}  
	}


        }else {
		echo "MVC";
	    }
    }

}
?>