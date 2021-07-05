<?php

class Dto{  

    public static function getMysql(){
        return new PDO('mysql:host=localhost;dbname=ead', "root", "");
    }

}

?>