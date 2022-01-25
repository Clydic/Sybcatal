<?php
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
