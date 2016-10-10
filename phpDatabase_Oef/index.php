<?php
    require_once "DatabaseConnection.php"; 
    require_once "Debug.php";
    require_once "CustomClass.php";

    
?>


<?php
    $conn =DatabaseConnection::getConnection();

$testclass = CustomClass::getClassNameby_typeName("person");
Debug::d_echo($testclass->getDataBaseID());
Debug::d_echo($testclass->getClassName());


$testclass = CustomClass::getClassVariables();
//Debug::d_echo($testclass->getClassName());

?>




