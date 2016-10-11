<?php
    require_once "htmlFormatting.php";

    require_once "DatabaseConnection.php";
    require_once "Debug.php";
    require_once "CustomClass.php";

    
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php

    $testclass = CustomClass::getClassBy_typeName("person");
    Debug::d_echo($testclass->getDataBaseID());
    Debug::d_echo($testclass->getClassName());


    if(! $testclass->getClassVariables()){
        Debug::d_echo("nothing found");
    };


//      

?>




