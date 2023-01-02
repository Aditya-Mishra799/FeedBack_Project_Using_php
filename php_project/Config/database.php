<?php
    /* This php file will connect our project to sql database */

    /*
           Two main ways to connect to db:

           1. Mysqli only mysql db
           2. pdo(phpdataobject) : preffered allows 12 different dbs
     */

     //creating constants to db deails

     define("DB_HOST","localhost");
     define("DB_USER","Aditya");
     define("DB_PASS","123456");
     define("DB_NAME","feedback_db");

     //create connection
     $connec = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

     if($connec->connect_error){
        die('Connection Failed'.$connec->connect_error); //die is like exit with a message
     }
?>