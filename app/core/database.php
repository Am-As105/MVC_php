

<?php

// echo "amine";

 class database{

      protected static  $db = null;

       public function  __construct()
       {
       }

        public static function  connect()
        {
            if (self::$db == null){
                 self::$db = new PDO("mysql:dbname=mvc;host=localhost;", "root","");
                 self::$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

            }
            return self::$db;
        }
 }




?>