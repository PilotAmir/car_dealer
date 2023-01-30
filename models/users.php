<?php
namespace models;

class users extends database implements base
 {
    public function Insert(array $data){
        $this->SendData("INSERT INTO client(nom, prenom, email, tel,identifiant,mdp) VALUES (?,?,?,?,?,?)",$data);
    }
    public function Update(array $data){
        $this->SendData("UPDATE client SET nom=?,prenom=?,email=?,tel=?,identifiant=?,mdp=? WHERE Id=?",$data);
    }
    public function Delete(int $id){
        $this->SendData("DELETE FROM client WHERE client_id=?",[$id]);
    }
    public function GetAll(): array{
        return $this->GetManyData("SELECT client_id, nom, prenom, email, tel,identifiant FROM client",NULL);
    }
    public function GetById(int $id){
        return $this->GetOneData("SELECT client_id, nom, prenom, email, tel, identifiant FROM client WHERE Id=?",[$id]);
    }
    public function Recherches(array $data){
    return $this->GetManyData("SELECT client_id, nom, prenom, identifiant FROM client WHERE nom=? or prenom=? or identifiant=?" , $data);
    }
    public function GetUserByLogin(string $login){
        return $this->GetOneData("SELECT client_id, nom, prenom, email, tel, identifiant, mdp FROM client WHERE identifiant=?",[$login]);
    }
}