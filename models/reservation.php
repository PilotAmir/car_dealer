<?php
namespace models;

class reservation extends database 
{
    public function Insert(array $data)
    {
        $this->SendData("INSERT INTO reservation(client_reserv, voiture_reserv, pack_reserver) VALUES (?,?,?)", $data);
    }

    public function GetAll()
    {
        $this->GetManyData("SELECT client_reserv, voiture_reserv, pack_reserver FROM reservation", NULL);
    }

    public function GetReservation()
    {
        $this->GetManyData("SELECT client.nom, client.prenom, reservation.reservation_id, reservation.voiture_reserv, reservation.date_de_reservation, reservation.pack_reserver, voiture.voiture_brand, voiture.voiture_model, voiture.voiture_color, voiture.voiture_price FROM reservation INNER JOIN voiture ON reservation.voiture_reserv = voiture.voiture_id INNER JOIN client ON reservation.client_reserv = client.client_id", NULL);
    }

}