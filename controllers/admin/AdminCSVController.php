<?php
require_once '/syncatal/classes/CSV.php';

class AdminCSVController extends ModuleAdminController
{


    /**
     * Instanciation de la classe
     * Définition des paramètres basiques obligatoires
     */
    public function __construct()
    {
        $this->bootstrap = true; //Gestion de l'affichage en mode bootstrap 
        $this->filename = CSV::getFilename();

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
