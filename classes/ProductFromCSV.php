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
 * Transform rows from a csv file into an object
 */
class ProductFromCSV
{

    private $id;
    private $manufacturer;
    private $title;
    private $description;
    private $price;
    private $ancien_prix;
    private $couleur;
    private $matiere;
    private $motif;
    private $taille;
    private $link;
    private $image_link;
    private $image_2;
    private $image_3;
    private $type_1;
    private $type_2;
    private $type_3;
    private $genre;
    private $stock;
    public function __construct(
        $id

    ) {
        //parent::__construct($id);
        $this->id = $id;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of manufacturer
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set the value of manufacturer
     *
     * @return  self
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of ancien_prix
     */
    public function getAncien_prix()
    {
        return $this->ancien_prix;
    }

    /**
     * Set the value of ancien_prix
     *
     * @return  self
     */
    public function setAncien_prix($ancien_prix)
    {
        $this->ancien_prix = $ancien_prix;

        return $this;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set the value of matiere
     *
     * @return  self
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get the value of motif
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of taille
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of taille
     *
     * @return  self
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of image_link
     */
    public function getImage_link()
    {
        return $this->image_link;
    }

    /**
     * Set the value of image_link
     *
     * @return  self
     */
    public function setImage_link($image_link)
    {
        $this->image_link = $image_link;

        return $this;
    }

    /**
     * Get the value of image_2
     */
    public function getImage_2()
    {
        return $this->image_2;
    }

    /**
     * Set the value of image_2
     *
     * @return  self
     */
    public function setImage_2($image_2)
    {
        $this->image_2 = $image_2;

        return $this;
    }

    /**
     * Get the value of image_3
     */
    public function getImage_3()
    {
        return $this->image_3;
    }

    /**
     * Set the value of image_3
     *
     * @return  self
     */
    public function setImage_3($image_3)
    {
        $this->image_3 = $image_3;

        return $this;
    }

    /**
     * Get the value of type_1
     */
    public function getType_1()
    {
        return $this->type_1;
    }

    /**
     * Set the value of type_1
     *
     * @return  self
     */
    public function setType_1($type_1)
    {
        $this->type_1 = $type_1;

        return $this;
    }

    /**
     * Get the value of type_2
     */
    public function getType_2()
    {
        return $this->type_2;
    }

    /**
     * Set the value of type_2
     *
     * @return  self
     */
    public function setType_2($type_2)
    {
        $this->type_2 = $type_2;

        return $this;
    }

    /**
     * Get the value of type_3
     */
    public function getType_3()
    {
        return $this->type_3;
    }

    /**
     * Set the value of type_3
     *
     * @return  self
     */
    public function setType_3($type_3)
    {
        $this->type_3 = $type_3;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}
