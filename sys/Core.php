<?php


class Core{ 
  static private $conf;

	static function init(){
         
		/*echo 'El core se inicio';
			echo var_dump(Request::retrieve());
			echo"</br>";
            echo('Controller: ');
            print_r(Request::getCount()); 
            echo"</br>";
            echo('Parms: ');
            print_r(Request::getParams());
			echo"</br>";
            echo('Action: ');
            print_r(Request::getAction());*/

            $conf=Config::getIns();

            Config::set('moto','yamaha');

            echo "<strong>Un dato ya introducido anteriormente</strong><br/>";

            if(Config::set('moto','yamaha') == true){
                  echo "Se ha guardado satisfactoriamente<br/>";
            }else{
                  echo "El registro ya existe <br/>";

            }


            echo "<b>Rrecuperar un dato del array, inexistente</b><br/>";

            if(Config::get("moto") != null){

                  echo Config::get("moto");
            }else{

                  echo "Registro indexistente";
            }




	}
}