<?php
    require_once "htmlFormatting.module";
    require_once "DatabaseConnection.php";
    require_once "Debug.php";
    require_once "CustomClass.php";

    
?>


<?php

//    $testclass = CustomClass::getClassBy_typeName("person");
//    Debug::d_echo($testclass->getDataBaseID());
//    Debug::d_echo($testclass->getClassName());
//
//
//    if(! $testclass->getClassVariables()){
//        Debug::d_echo("nothing found");
//    };


    createHTMLTable(["first title", "second title", "thrid title"],[["a","b","c"],["d","e","f"],["g"],["h"]]);

?>




