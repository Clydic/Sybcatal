<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
include("controllers/admin/CSVController.php");
include("classes/CSV.php");
/*A Simple file in order to test function  */

$filename = "src/Sandro.csv";
function displayFile($filename)
{

    $csv = array_map('str_getcsv', file($filename));

    $msg = "";
    foreach ($csv as $row) {
        foreach ($row as $column) {
            $msg .= $column . " ";
        }
        $msg .= "\n";
    }
    echo $msg;
}
//displayFile($filename);
//$filename = "test.pdf";

/**
 * Check if the file is a csv file
 *
 * @param string $filename
 * @return boolean
 */
function isCSV($filename)
{
    $arrayFilename = explode(".", $filename);
    $n = count($arrayFilename);
    echo $arrayFilename[$n - 1] === 'csv';
}

/**
 * Check if the array are identical
 *
 * @param array $array1
 * @param array $array2
 * @return boolean
 */
function isSameArray($array1, $array2)
{
    $lengthArray1 = count($array1);
    $lengthArray2 = count($array2);
    // We check if the array have the same number of element
    if ($lengthArray1 === $lengthArray2) {
        for ($i = 0; $i < $lengthArray2; $i++) {
            // Check if each element are identical
            if ($array1[$i] !== $array2[$i]) {
                echo "Les tableaux ne sont pas identique \n";
                return false;
            }
        }
        echo "Les tableaux sont identiques \n";
        return true;
    }
    echo "Les tableau ne sont pas de la même longueur \n";
    return false;
}

function convertRowsToProduct($aKey, $aValue)
{


    if (count($aKey) === count($aValue)) {
        $a = [];
        for ($i = 0; $i < count($aKey); $i++) {
            $a[$aKey[$i]] = $aValue[$i];
        }
        return $a;
    }
    return false;
}

$a1 = ["test", "test2"];
$a2 = ["test", "test2"];
$a3 = ["test", "test2", "test3"];
$a4 = ["feu", "test2"];
$filename = "src/Sandro.csv";
$csv = array_map('str_getcsv', file($filename));
$csvClass = new CSV($filename, $csv[0], array_slice($csv, 1));

var_dump(CSVController::isCSV($csvClass->getFilename()));
var_dump(CSVController::isfieldsexpected($a1, $a2));
var_dump(CSVController::isfieldsexpected($a1, $a3));
var_dump(CSVController::isfieldsexpected($a1, $a4));
$reflect = new ReflectionClass($csvClass);
$props = $reflect->getProperties();

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

var_dump($props);
/*
var_dump(array_slice($csv, 1));
var_dump(convertRowsToProduct($a1, $a4));
var_dump(convertRowsToProduct($a1, $a3));
*/