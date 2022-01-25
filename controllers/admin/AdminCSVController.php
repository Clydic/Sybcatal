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
require_once '/syncatal/classes/CSV.php';

class AdminCSVController extends ModuleAdminController
{


    /**
     * Instanciation de la classe
     * Définition des paramètres basiques obligatoires
     */
    public function __construct()
    { //Gestion de l'affichage en mode bootstrap 
        $this->bootstrap = true;
        $this->ilename = CSV::getFilename();

        //Appel de la fonction parente pour pouvoir utiliser la traduction ensuite
        parent::__construct();

        //Liste des champs de l'objet à afficher dans la liste
        $this->fields_list = [
            'filename' => ['title' => 'crotte']
        ];

        //Ajout d'actions sur chaque ligne
        $this->addRowAction('edit');
        $this->addRowAction('delete');
    }
}
