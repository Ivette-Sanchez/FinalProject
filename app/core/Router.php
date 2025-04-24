<?php
namespace app\core;

use app\controllers\MainController;
use app\controllers\ContactController;
use app\controllers\GalleryController;

class Router {
    public $uriArray;

    function __construct() {
        $this->uriArray = $this->routeSplit();
        $this->handleMainRoutes();
        $this->handleGalleryRoutes();
        $this->handleGalleryApiRoutes();
        $this->handleAboutArtRoutes();
        $this->handleAboutMeRoutes();
        $this->handleContactRoutes();
        $this->handleContactApiRoutes();
        $this->handlePortfolioRoutes();
    }

    protected function routeSplit() {
        $removeQueryParams = strtok($_SERVER["REQUEST_URI"], '?');
        return explode("/", $removeQueryParams);
    }

    protected function handleMainRoutes() {
        if ($this->uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->homepage();
        }
    }

    
    //views
    protected function handleGalleryRoutes() {
        if ($this->uriArray[1] === 'gallery' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->gallerysView();
        }
    }
    protected function handleGalleryApiRoutes() {
        if (isset($this->uriArray[1], $this->uriArray[2]) && $this->uriArray[1] === 'api' && $this->uriArray[2] === 'gallerys' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = isset($this->uriArray[3]) ? intval($this->uriArray[3]) : null;
            $galleryController = new GalleryController();
    
            if ($id) {
                $galleryController->getGalleryByID($id);
            } else {
                $galleryController->getAllGallerys();
            }
        }
    }

    protected function handleAboutArtRoutes() {
        if ($this->uriArray[1] === 'aboutart' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->aboutArt();
        }
    }

    
    protected function handleAboutMeRoutes() {
        if ($this->uriArray[1] === 'aboutme' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->aboutme();
        }
    }
  
    protected function handlePortfolioRoutes() {
        if ($this->uriArray[1] === 'portfolio' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->portfolio();
        }
    }

    protected function handleContactRoutes() {
        if ($this->uriArray[1] === 'contactview' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->contactsView();  
        }

        if ($this->uriArray[1] === 'new-contact' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->contactsAddView(); 
        }
    }

    protected function handleContactApiRoutes() {
        if (isset($this->uriArray[1], $this->uriArray[2]) &&
            $this->uriArray[1] === 'api' && $this->uriArray[2] === 'contacts') {
                $contactController = new ContactController();

                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $id = isset($this->uriArray[3]) ? intval($this->uriArray[3]) : null;
                    if ($id) {
                        $contactController->getContactByID($id);
                    } else {
                        $contactController->getAllContacts();
                    }
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $contactController->saveContact();
                }
            }
    }
    
}

