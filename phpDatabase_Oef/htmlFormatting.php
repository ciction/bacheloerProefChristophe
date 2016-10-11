<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 10/10/2016
 * Time: 5:46 PM
 */

/**
 * Singleton class HtmlTablePrinter
 */
class HtmlTablePrinter
{
    /**
     * Private ctor
     */
    private function __construct()
    {
    }

    /**
     * Get singleton method
     * @return HtmlTablePrinter
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new HtmlTablePrinter();
        }
        return $inst;
    }

    private $tableName = "";
    private $titles = [];
    private $values2DArr = [];


    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }

    public function addRow($items) {
        $this->values2DArr[] = $items;
    }

    public function setTitles($titles) {
        $this->titles = $titles;
    }


    public function createHTMLTable(){
        $dom = new DOMDocument('1.0', 'utf-8');

        $tableDiv = $dom->createElement('div');
        $table = $dom->createElement('table');

        //table name
        $tableName = $dom->createElement('h4');
        $tableNamePostfix = $dom->createTextNode(" fields:");
        $tableNameBold = $dom->createElement('b', $this->tableName);
        $tableName->appendChild($tableNameBold);
        $tableName->appendChild($tableNamePostfix);


        //table div
        $dom->appendChild($tableDiv);
        $tableDiv->appendChild($tableName);
        $tableDiv->appendChild($table);


        $table->setAttribute("style","width:100%");
        $table->setAttribute("class","table table-striped");
        $tableRow = $dom->createElement('tr');

        foreach ($this->titles as $title) {
            $tableHeader = $dom->createElement('th',$title);
            $tableRow->appendChild($tableHeader);
        }
        $table->appendChild($tableRow);

        foreach ($this->values2DArr as $valueArr) {
            $tableRow = $dom->createElement('tr');


            foreach ($valueArr as $key=>$value) {
                $tableColumn = $dom->createElement('td',$value);
                $tableRow->appendChild($tableColumn);
            }
            $table->appendChild($tableRow);
        }

        echo $dom->saveXML();
        return $dom;
    }


}


?>