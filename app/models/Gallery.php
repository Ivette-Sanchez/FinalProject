<?php

namespace app\models;

use app\models\Model;

class Gallery extends Model {

    public function getAllGallerysByTitleOrDate($title, $date) {
        $query = "select * from gallerys WHERE title like :title or date like :date";
        return $this->query($query, [
            'title' => '%' . $title . '%',
            'date' => '%' . $date . '%',
        ]);
    }
    
    public function getAllGallerys() {
        $query = "select * from gallerys order by id DESC"; 
        return $this->query($query);
    }
   

    public function getGalleryById($id){
        $query = "select * from gallerys where id = :id";
        return $this->query($query, ['id' => $id]);
    }
}