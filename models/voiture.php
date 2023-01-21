<?php  
namespace models;

class voiture extends database
{
    public function Insert(array $data)
    {
        $this->SendData("INSERT INTO voiture(voiture_brand,voiture_model,voiture_color,voiture_price,images_voitures) VALUES(?,?,?,?,?)", $data);
    }

    public function Update(array $data){
        $this->SendData("UPDATE plats SET nom_plat=?,prix_du_plat=?, WHERE Id=?",$data);
    }

    public function Delete(int $id){
        $this->SendData("DELETE FROM plats WHERE Id=?",[$id]);
    }

    public function GetAll(): array{
        return $this->GetManyData("SELECT voiture_brand,voiture_model,voiture_color,voiture_price,images_voitures FROM voiture",NULL);
    }
}