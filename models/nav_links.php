<?php
namespace models;

class nav_links extends database implements base
{

    public function Insert(array $data){
        $this->SendData("INSERT INTO nav_links( links_name, nav_goto, nav_target ) VALUES (?,?,?)",$data);
    }
    public function Update(array $data){
        $this->SendData("UPDATE nav_links SET links_name=?,nav_goto=?,nav_target=? WHERE id=?",$data);
    }
    public function Delete(int $id){
        $this->SendData("DELETE FROM nav_links WHERE id=?",[$id]);
    }
    public function GetAll(): array{
        return $this->GetManyData("SELECT id,links_name, nav_goto, nav_target  FROM nav_links",NULL);
    }
    public function GetById(int $id){
        return $this->GetOneData("SELECT id,links_name, nav_goto, nav_target FROM nav_links WHERE id=?",[$id]);
    }
   
}