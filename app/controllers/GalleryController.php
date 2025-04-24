<?php

namespace app\controllers;
require_once __DIR__ . '/../models/Gallery.php'; 

use app\models\Gallery;

class GalleryController
{
    public function getAllGallerys() {
        $galleryModel = new Gallery();
        header("Content-Type: application/json");
        $gallerys = $galleryModel->getAllGallerys();

        echo json_encode($gallerys);
        exit();
    }

    public function getGalleryByID($id) {
        $galleryModel = new Gallery();
        header("Content-Type: application/json");
        $gallery = $galleryModel->getGalleryById($id);
        echo json_encode($gallery);
        exit();
    }

}