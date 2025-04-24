<?php

namespace app\controllers;
use app\controllers\MainController;
//this is an example controller class, feel free to delete
class MainController extends Controller {

    public function homepage() {
        $this->returnView('./assets/views/main/homepage.html');
    }

    public function artworks() {
        // Load the artworks view
        $this->returnView('./assets/views/main/artworks.html');
    }

    public function gallerysView() {
        //Load the gallery view
        $this->returnView('./assets/views/gallery/gallerys-view.html');
    }

    public function aboutArt() {
        //Load the about art gallery view
        $this->returnView('./assets/views/gallery/about-art.html');
    }
    
    public function aboutme() {
        // Load the about me view
        $this->returnView('./assets/views/main/aboutme.html');
    }

    public function contactsView() {
        // Load the contact me view
        $this->returnView('./assets/views/contact/contacts-view.html');
    }

    public function portfolio() {
        //Load the portfolio view
        $this->returnView('./assets/views/main/portfolio.html');
    }
    

}



