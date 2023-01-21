<?php
namespace models;

class admin extends database implements base
{
    public function Insert(array $data)
    {
        $this->SendData("INSERT INTO `admin` (identifiant, mdp, email_admin) VALUES (?,?,?",$data);
    }
    public function Update(array $data)
    {
        $this->SendData("UPDATE `admin` SET identifiant=?, mdp=?, email_admin=? WHERE admin_id=?",$data);
    }
    public function Delete(int $id)
    {
        $this->SendData("DELETE FROM `admin` WHERE admin_id=?",[$id]);
    }
    public function GetAll()
    {
        return $this->GetManyData("SELECT admin_id, identifiant, mdp, email_admin FROM `admin`");
    }
    public function GetById(int $id)
    {
        return $this->GetOneData("SELECT admin_id,identifiant, mdp, email_admin FROM `admin` WHERE admin_id=?",[$id]);
    }
    public function GetByAdLogin(string $login)
    {
        return $this->GetOneData("SELECT admin_id, identifiant, mdp, email_admin FROM `admin` WHERE identifiant=?",[$login]);
    }
    public function UpdateAdPasswd(array $data)
    {
        $this->SendData("UPDATE `admin` SET mdp=? WHERE admin_id=?",$data);
    }

}