<?php
namespace models;


class users extends database {
public function Insert(array $data){
    $this->SendData("INSERT INTO client(nom, prenom, email, Mdp) VALUES (?,?,?,?)",$data);
}
public function Update(array $data){
    $this->SendData("UPDATE users SET Nom=?,Prenom=?,Identifiant=?,Mdp=? WHERE Id=?",$data);
}
public function Delete(int $id){
    $this->SendData("DELETE FROM users WHERE Id=?",[$id]);
}
public function GetAll(): array{
    return $this->GetManyData("SELECT Id,Nom, Prenom, Identifiant FROM users",NULL);
}
public function GetById(int $id){
    return $this->GetOneData("SELECT Id,Nom, Prenom, Identifiant FROM users WHERE Id=?",[$id]);
}
public function Recherches(array $data){
   return $this->GetManyData("SELECT Id, Nom, Prenom, Identifiant FROM users WHERE Nom=? or Prenom=? or Identifiant=?" , $data);
}
public function GetUserByLogin(string $login){
    return $this->GetOneData("SELECT Id, Nom, Prenom, Identifiant, Mdp FROM users WHERE Identifiant=?",[$login]);
}
}