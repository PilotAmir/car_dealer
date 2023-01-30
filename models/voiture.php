<?php  
namespace models;

class voiture extends database
{
    public function Insert(array $data)
    {
        $this->SendData("INSERT INTO voiture(voiture_brand,voiture_model,voiture_color,voiture_price,images_voitures) VALUES(?,?,?,?,?)", $data);
    }

    public function Update(array $data){
        $this->SendData("UPDATE voiture SET voiture_brand=?,voiture_model=?,voiture_color=?,voiture_price=?,images_voitures=? WHERE voiture_id=?",$data);
    }

    public function GetAll(): array
    {
        return $this->GetManyData("SELECT  voiture_id, voiture_brand,voiture_model,voiture_color,voiture_price,images_voitures FROM voiture",NULL);
    }

    public function GetVoiture(string $brand)
    {
        return $this->GetManyData("SELECT voiture_brand,voiture_model,voiture_color,voiture_price,images_voitures FROM voiture WHERE voiture_brand=?",[$brand]);
    }

    public function Delete(int $id){
        $this->SendData("DELETE FROM voiture WHERE voiture_id=?",[$id]);
    }

    public function GetById(int $id){
        return $this->GetOneData("SELECT voiture_id, voiture_brand, voiture_model, voiture_color, voiture_price, images_voitures FROM voiture WHERE voiture_id=?",[$id]);
    }

}