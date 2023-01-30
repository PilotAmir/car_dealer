<?php
namespace models;

class article extends database implements base
 {
    public function Insert(array $data){
        $this->SendData("INSERT INTO article(titre, commentaire, image_article) VALUES (?,?,?)",$data);
        
    }
    public function Update(array $data){
        $this->SendData("UPDATE article SET titre=?,commentaire=?,image_article=? WHERE article_id=?",$data);
    }
    public function Delete(int $id){
        $this->SendData("DELETE FROM article WHERE article_id=?",[$id]);
    }
    public function GetAll():array {
        return $this->GetManyData("SELECT article_id, titre, commentaire, image_article FROM article",NULL);
        echo'ici';
    }
    public function GetById(int $id){
        return $this->GetOneData("SELECT article_id, titre, commentaire, image_article FROM article WHERE article_id=?",[$id]);
    }
   
}