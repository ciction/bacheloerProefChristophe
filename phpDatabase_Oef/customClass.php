<?php

class CustomClass
{
    private $className;
    private $DataBaseID;
    private $variables = array();

    /**
     * CustomClass constructor.
     * @param $className
     * @param $DataBaseID
     */
    public function __construct($className, $DataBaseID)
    {
        $this->className = $className;
        $this->DataBaseID = $DataBaseID;
    }


    public function getClassName()
    {
        return $this->className;
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function getDataBaseID()
    {
        return $this->DataBaseID;
    }

    public function setDataBaseID($DataBaseID)
    {
        $this->DataBaseID = $DataBaseID;
    }



    static function getClassBy_typeName($className) {
        $conn = DatabaseConnection::getConnection();
        if ($stmt = $conn->prepare("SELECT id FROM _classes WHERE typeName=?")) {

            $stmt->bind_param("i", $className);
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows() <= 0) {  return false;  }



            $databaseID = "";
            $stmt->bind_result($databaseID);
            $stmt->fetch();
            $customClass = new CustomClass($className, $databaseID);

            /* close statement */
            $stmt->close();

            return $customClass;
        }
        return false;
    }

    function getClassVariables() {
        $conn = DatabaseConnection::getConnection();
        if ($stmt = $conn->prepare("SELECT * FROM _fields where id in (select field from _objects_fields where object = ?)")) {

            $stmt->bind_param("i", $this->getDataBaseID());
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows() <= 0) {  return false;  }


            $fieldID = "";
            $fieldName = "";
            $fieldType = "";
            $stmt->bind_result($fieldID,$fieldName,$fieldType);

            while ($row = $stmt->fetch()){
                $className  =$this->getClassName();
                Debug::d_echo("Fetched variables for <b>$className:</b> &emsp;  fieldID:$fieldID  | $fieldName:$fieldName  | fieldType:$fieldType");
            }
            /* close statement */
            $stmt->close();
            return true;
        }
        return false;
    }


}

