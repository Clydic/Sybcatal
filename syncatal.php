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

require("test/test.php");
if (!defined('_PS_VERSION_')) {
    exit;
}

class Syncatal extends Module
{
    public function __construct()
    {
        $this->name = 'syncatal';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Paimblanc Cédric';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Synchronisation catalog');
        $this->description = $this->l('This module synchronise a csv catalog with
        the Prestashop catalog');

        $this->confirmUninstall = $this->l('Are you sure to uninstall this module');

        if (!Configuration::get('SYNCATAL_PAGENAME')) {
            $this->warning = $this->l('Aucun nom fourni');
        }
    }
    public function install()
    {
        return parent::install(); // && $this->_installTab();
    }


    public function uninstall()
    {
        parent::uninstall(); /*&&
            $this->_uninstallTab(); {
            return false;
        }

        return true;*/
    }
    protected function _installTab()
    {
        $tab = new Tab();
        $tab->class_name = 'AdminSyncCatal';
        $tab->module = $this->name;
        $tab->id_parent = (int)Tab::getIdFromClassName('DEFAULT');
        $tab->icon = 'settings_applications';
        $languages = Language::getLanguages();
        foreach ($languages as $lang) {
            $tab->name[$lang['id_lang']] = $this->l('Syncatal Admin Controller');
        }
        try {
            $tab->save();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }

        return true;
    }

    /**
     * Désinstallation du controller admin
     * @return boolean
     */
    protected function _uninstallTab()
    {
        $idTab = (int)Tab::getIdFromClassName('AdminHhSample');
        if ($idTab) {
            $tab = new Tab($idTab);
            try {
                $tab->delete();
            } catch (Exception $e) {
                echo $e->getMessage();
                return false;
            }
        }
        return true;
    }


    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('btnSubmit')) {
            $pageName = strval(Tools::getValue('SYNCATAL_PAGENAME'));

            if (
                !$pageName ||
                empty($pageName)
            ) {
                $output .= $this->displayError($this->l('Invalid Configuration value'));
            } else {
                Configuration::updateValue('SYNCATAL_PAGENAME', $pageName);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }

        return $output . $this->displayForm();
    }

    public function displayForm()
    {
        // Récupère la langue par défaut
        $defaultLang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Initialise les champs du formulaire dans un tableau
        $form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Choose the csv file'),
                        'name' => 'SYNCATAL_PAGENAME',
                        'size' => 20,
                        'required' => true
                    ),


                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name'  => 'btnSubmit'
                )
            ),
        );

        $helper = new HelperForm();

        // Module, token et currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;

        // Langue
        $helper->default_form_language = $defaultLang;

        // Charge la valeur de SYNDICATAL_PAGENAME depuis la base
        $helper->fields_value['SYNCATAL_PAGENAME'] = Configuration::get('SYNDICATAL_PAGENAME');

        return $helper->generateForm(array($form));
    }
}
