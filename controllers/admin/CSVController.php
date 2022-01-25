<?php

//use ModuleAdminController;

class CSVController //extends ModuleAdminController
{
    public static function isCSV($csvFileName)
    {
        $arrayFilename = explode(".", $csvFileName);
        $n = count($arrayFilename);
        return $arrayFilename[$n - 1] === 'csv';
    }

    public static function isfieldsexpected($fieldsExpected, $fieldsTested)
    {
        $n1 = count($fieldsExpected);
        $n2 = count($fieldsTested);
        if ($n1 !== $n2) {
            return false;
        }
        for ($i = 0; $i < $n1; $i++) {
            // Check if each element are identical
            if ($fieldsExpected[$i] !== $fieldsTested[$i]) {
                echo "Les tableaux ne sont pas identique \n";
                return false;
            }
        }
        return true;
    }
}
