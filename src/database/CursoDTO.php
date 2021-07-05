<?php 

include("Dto.php");

class CursoDTO{

    public static function select(){

        
        $con = Dto::getMysql();

        return  $con->query('SELECT * FROM curso');        
    }

}

?>