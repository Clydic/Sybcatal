<?php

/**
 * 2007-2022 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2022 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

/**
 * Class transform a CSV file into an Object
 */
class CSV
{
    public $filename;
    public $fields;
    public $rows;

    public function __construct($filename, $fields, $rows)
    {
        $this->setFilename($filename);
        $this->setFields($fields);
        $this->setRows($rows);
    }


    /**
     * Get the value of filename
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @return  self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get the value of fields
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set the value of fields
     *
     * @return  self
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get the value of rows
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set the value of rows
     *
     * @return  self
     */
    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }
}
